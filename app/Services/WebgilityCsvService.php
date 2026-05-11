<?php

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class WebgilityCsvService
{
    public function generateForOrder(Order $order): string
    {
        $order->loadMissing(['items', 'files']);

        $orderNumber = $order->order_number ?: ('ORDER-' . $order->id);
        $filename = 'webgility/orders/' . $orderNumber . '-webgility.csv';

        $handle = fopen('php://temp', 'r+');

        fputcsv($handle, $this->headers());

        $shipping = $order->shipping_address ?: [];
        $billing = $order->billing_address ?: [];

        $filesByType = $order->files
            ->groupBy('type')
            ->map(fn ($files) => $files->pluck('filename')->implode(' | '))
            ->toArray();

        $filePathsByType = $order->files
            ->groupBy('type')
            ->map(fn ($files) => $files->pluck('path')->implode(' | '))
            ->toArray();

        foreach ($order->items as $item) {
            fputcsv($handle, [
                // Order identity
                $order->id,
                $order->order_number,
                $order->quote_number,
                optional($order->created_at)->format('Y-m-d H:i:s'),
                optional($order->updated_at)->format('Y-m-d H:i:s'),

                // Customer
                $order->customer_name,
                $order->customer_email,
                $order->customer_phone,
                $order->company,
                $order->job_name,

                // Order summary
                $order->total_tags,
                $order->total_pieces,
                $this->money($order->product_subtotal),
                $this->money($order->product_total),
                $this->money($order->shipping_total),
                $this->money($order->grand_total),

                // Status
                $order->order_status,
                $order->payment_status,
                $order->payment_method,
                $order->card_last_four,
                $order->stripe_checkout_session_id,
                $order->stripe_payment_intent_id,
                $order->stripe_payment_status,
                optional($order->paid_at)->format('Y-m-d H:i:s'),

                // Proof
                $order->proof_approved ? 'Yes' : 'No',
                optional($order->proof_approved_at)->format('Y-m-d H:i:s'),

                // Shipping
                $order->shipping_method,
                $shipping['contact'] ?? '',
                $shipping['phone'] ?? '',
                $shipping['street'] ?? '',
                $shipping['city'] ?? '',
                $shipping['state'] ?? '',
                $shipping['zip'] ?? '',

                // Billing
                $billing['contact'] ?? '',
                $billing['phone'] ?? '',
                $billing['street'] ?? '',
                $billing['city'] ?? '',
                $billing['state'] ?? '',
                $billing['zip'] ?? '',

                // Line item
                $item->id,
                $item->line_no,
                $item->qty,
                $item->height,
                $item->width,
                $item->size_label,
                $item->color,
                $item->holes,
                $item->hole_size,
                $item->shape,
                $this->cleanText($item->text_content),
                $this->json($item->line_styles),
                $this->money($item->unit_price),
                $this->money($item->subtotal),

                // Product name / description for Webgility mapping
                $this->itemSku($order, $item),
                $this->itemName($item),
                $this->itemDescription($item),

                // Generated files
                $filesByType['quote_pdf'] ?? '',
                $filePathsByType['quote_pdf'] ?? '',
                $filesByType['proof_pdf'] ?? '',
                $filePathsByType['proof_pdf'] ?? '',
                $filesByType['production_order_sheet'] ?? '',
                $filePathsByType['production_order_sheet'] ?? '',
                $filesByType['laser_ready_file'] ?? '',
                $filePathsByType['laser_ready_file'] ?? '',
                $order->files->pluck('filename')->implode(' | '),
                $order->files->pluck('path')->implode(' | '),

                // Raw backup data
                $this->json($item->payload),
                $this->json($order->payload),
            ]);
        }

        // If order somehow has no items, still export one order row.
        if ($order->items->isEmpty()) {
            fputcsv($handle, [
                $order->id,
                $order->order_number,
                $order->quote_number,
                optional($order->created_at)->format('Y-m-d H:i:s'),
                optional($order->updated_at)->format('Y-m-d H:i:s'),

                $order->customer_name,
                $order->customer_email,
                $order->customer_phone,
                $order->company,
                $order->job_name,

                $order->total_tags,
                $order->total_pieces,
                $this->money($order->product_subtotal),
                $this->money($order->product_total),
                $this->money($order->shipping_total),
                $this->money($order->grand_total),

                $order->order_status,
                $order->payment_status,
                $order->payment_method,
                $order->card_last_four,
                $order->stripe_checkout_session_id,
                $order->stripe_payment_intent_id,
                $order->stripe_payment_status,
                optional($order->paid_at)->format('Y-m-d H:i:s'),

                $order->proof_approved ? 'Yes' : 'No',
                optional($order->proof_approved_at)->format('Y-m-d H:i:s'),

                $order->shipping_method,
                $shipping['contact'] ?? '',
                $shipping['phone'] ?? '',
                $shipping['street'] ?? '',
                $shipping['city'] ?? '',
                $shipping['state'] ?? '',
                $shipping['zip'] ?? '',

                $billing['contact'] ?? '',
                $billing['phone'] ?? '',
                $billing['street'] ?? '',
                $billing['city'] ?? '',
                $billing['state'] ?? '',
                $billing['zip'] ?? '',

                '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',

                $filesByType['quote_pdf'] ?? '',
                $filePathsByType['quote_pdf'] ?? '',
                $filesByType['proof_pdf'] ?? '',
                $filePathsByType['proof_pdf'] ?? '',
                $filesByType['production_order_sheet'] ?? '',
                $filePathsByType['production_order_sheet'] ?? '',
                $filesByType['laser_ready_file'] ?? '',
                $filePathsByType['laser_ready_file'] ?? '',
                $order->files->pluck('filename')->implode(' | '),
                $order->files->pluck('path')->implode(' | '),

                '',
                $this->json($order->payload),
            ]);
        }

        rewind($handle);

        $csv = stream_get_contents($handle);

        fclose($handle);

        Storage::disk('local')->put($filename, $csv);

        return $filename;
    }

    private function headers(): array
    {
        return [
            // Order identity
            'Order ID',
            'Order Number',
            'Quote Number',
            'Order Created At',
            'Order Updated At',

            // Customer
            'Customer Name',
            'Customer Email',
            'Customer Phone',
            'Company',
            'Job Name',

            // Order summary
            'Total Tags',
            'Total Pieces',
            'Product Subtotal',
            'Product Total',
            'Shipping Total',
            'Grand Total',

            // Status/payment
            'Order Status',
            'Payment Status',
            'Payment Method',
            'Card Last Four',
            'Stripe Checkout Session ID',
            'Stripe Payment Intent ID',
            'Stripe Payment Status',
            'Paid At',

            // Proof
            'Proof Approved',
            'Proof Approved At',

            // Shipping
            'Shipping Method',
            'Ship Contact',
            'Ship Phone',
            'Ship Street',
            'Ship City',
            'Ship State',
            'Ship Zip',

            // Billing
            'Bill Contact',
            'Bill Phone',
            'Bill Street',
            'Bill City',
            'Bill State',
            'Bill Zip',

            // Item
            'Line Item ID',
            'Line Number',
            'Quantity',
            'Height',
            'Width',
            'Size Label',
            'Color',
            'Holes',
            'Hole Size',
            'Shape',
            'Text Content',
            'Line Styles JSON',
            'Unit Price',
            'Line Subtotal',

            // Webgility-friendly mapping fields
            'SKU',
            'Item Name',
            'Item Description',

            // Generated files
            'Quote PDF Filename',
            'Quote PDF Path',
            'Proof PDF Filename',
            'Proof PDF Path',
            'Production Order Sheet Filename',
            'Production Order Sheet Path',
            'Laser Ready File Filename',
            'Laser Ready File Path',
            'All File Names',
            'All File Paths',

            // Raw backup
            'Item Payload JSON',
            'Order Payload JSON',
        ];
    }

    private function itemSku(Order $order, $item): string
    {
        $size = $item->size_label ?: ($item->width . 'x' . $item->height);
        $color = $item->color ?: 'NA';
        $shape = $item->shape ?: 'TAG';

        return strtoupper(
            preg_replace('/[^A-Za-z0-9\-]/', '-', "ASE-{$shape}-{$size}-{$color}")
        );
    }

    private function itemName($item): string
    {
        $parts = array_filter([
            'Custom Engraved Tag',
            $item->size_label,
            $item->color,
            $item->shape,
        ]);

        return implode(' - ', $parts);
    }

    private function itemDescription($item): string
    {
        $parts = array_filter([
            'Qty: ' . $item->qty,
            $item->size_label ? 'Size: ' . $item->size_label : null,
            $item->width && $item->height ? 'Dimensions: ' . $item->width . ' x ' . $item->height : null,
            $item->color ? 'Color: ' . $item->color : null,
            $item->holes ? 'Holes: ' . $item->holes : null,
            $item->hole_size ? 'Hole Size: ' . $item->hole_size : null,
            $item->shape ? 'Shape: ' . $item->shape : null,
            $item->text_content ? 'Text: ' . $this->cleanText($item->text_content) : null,
        ]);

        return implode(' | ', $parts);
    }

    private function money($value): string
    {
        return number_format((float) $value, 2, '.', '');
    }

    private function cleanText($value): string
    {
        return trim(str_replace(["\r\n", "\r", "\n"], ' | ', (string) $value));
    }

    private function json($value): string
    {
        if ($value === null || $value === '') {
            return '';
        }

        return json_encode($value, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}