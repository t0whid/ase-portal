<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Mail\CustomerOrderConfirmationMail;
use App\Mail\ProductionOrderNotificationMail;
use App\Models\EmailLog;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::with('items')
            ->where('user_id', $request->user()->id)
            ->latest()
            ->get()
            ->map(fn($order) => $this->payload($order));

        return response()->json([
            'success' => true,
            'data' => [
                'orders' => $orders,
            ],
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'quote_number' => ['nullable', 'string', 'max:100'],

            'customer_name' => ['required', 'string', 'max:255'],
            'customer_email' => ['required', 'email', 'max:255'],
            'customer_phone' => ['nullable', 'string', 'max:50'],
            'company' => ['nullable', 'string', 'max:255'],
            'job_name' => ['nullable', 'string', 'max:255'],

            'total_tags' => ['nullable', 'integer', 'min:0'],
            'total_pieces' => ['nullable', 'integer', 'min:0'],

            'product_subtotal' => ['nullable', 'numeric', 'min:0'],
            'product_total' => ['nullable', 'numeric', 'min:0'],
            'shipping_total' => ['nullable', 'numeric', 'min:0'],
            'grand_total' => ['nullable', 'numeric', 'min:0'],

            'shipping_address' => ['nullable', 'array'],
            'billing_address' => ['nullable', 'array'],
            'shipping_method' => ['nullable', 'string', 'max:100'],

            'payment_status' => ['nullable', 'string', 'max:100'],
            'payment_method' => ['nullable', 'string', 'max:100'],
            'card_last_four' => ['nullable', 'string', 'max:4'],

            'proof_approved' => ['nullable', 'boolean'],

            'items' => ['nullable', 'array'],
            'items.*.line_no' => ['nullable', 'integer', 'min:1'],
            'items.*.qty' => ['nullable', 'integer', 'min:1'],
            'items.*.height' => ['nullable', 'numeric', 'min:0'],
            'items.*.width' => ['nullable', 'numeric', 'min:0'],
            'items.*.size_label' => ['nullable', 'string', 'max:100'],
            'items.*.color' => ['nullable', 'string', 'max:100'],
            'items.*.holes' => ['nullable', 'string', 'max:100'],
            'items.*.hole_size' => ['nullable', 'string', 'max:100'],
            'items.*.shape' => ['nullable', 'string', 'max:100'],
            'items.*.text_content' => ['nullable', 'string'],
            'items.*.line_styles' => ['nullable', 'array'],
            'items.*.unit_price' => ['nullable', 'numeric', 'min:0'],
            'items.*.subtotal' => ['nullable', 'numeric', 'min:0'],
            'items.*.payload' => ['nullable', 'array'],

            'payload' => ['required', 'array'],
        ]);

        $order = DB::transaction(function () use ($request, $data) {
            $order = Order::create([
                'user_id' => $request->user()?->id,
                'order_number' => $this->generateOrderNumber(),
                'quote_number' => $data['quote_number'] ?? null,

                'customer_name' => $data['customer_name'],
                'customer_email' => strtolower($data['customer_email']),
                'customer_phone' => $data['customer_phone'] ?? null,
                'company' => $data['company'] ?? null,
                'job_name' => $data['job_name'] ?? null,

                'total_tags' => $data['total_tags'] ?? 0,
                'total_pieces' => $data['total_pieces'] ?? 0,

                'product_subtotal' => $data['product_subtotal'] ?? 0,
                'product_total' => $data['product_total'] ?? 0,
                'shipping_total' => $data['shipping_total'] ?? 0,
                'grand_total' => $data['grand_total'] ?? 0,

                'shipping_address' => $data['shipping_address'] ?? null,
                'billing_address' => $data['billing_address'] ?? null,
                'shipping_method' => $data['shipping_method'] ?? null,

                'payment_status' => $data['payment_status'] ?? 'pending',
                'payment_method' => $data['payment_method'] ?? null,
                'card_last_four' => $data['card_last_four'] ?? null,

                'order_status' => 'submitted',
                'proof_approved' => $data['proof_approved'] ?? false,
                'proof_approved_at' => ($data['proof_approved'] ?? false) ? now() : null,

                'payload' => $data['payload'],
            ]);

            foreach (($data['items'] ?? []) as $index => $item) {
                $order->items()->create([
                    'line_no' => $item['line_no'] ?? ($index + 1),
                    'qty' => $item['qty'] ?? 1,
                    'height' => $item['height'] ?? null,
                    'width' => $item['width'] ?? null,
                    'size_label' => $item['size_label'] ?? null,
                    'color' => $item['color'] ?? null,
                    'holes' => $item['holes'] ?? null,
                    'hole_size' => $item['hole_size'] ?? null,
                    'shape' => $item['shape'] ?? null,
                    'text_content' => $item['text_content'] ?? null,
                    'line_styles' => $item['line_styles'] ?? null,
                    'unit_price' => $item['unit_price'] ?? 0,
                    'subtotal' => $item['subtotal'] ?? 0,
                    'payload' => $item['payload'] ?? null,
                ]);
            }

            return $order->load('items');
        });

        $this->sendOrderEmails($order);

        return response()->json([
            'success' => true,
            'message' => 'Order submitted successfully.',
            'data' => [
                'order' => $this->payload($order),
            ],
        ], 201);
    }

    public function show(Request $request, Order $order)
    {
        if ($order->user_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Order not found.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'order' => $this->payload($order->load('items')),
            ],
        ]);
    }

    private function generateOrderNumber(): string
    {
        do {
            $number = 'ORD-' . strtoupper(Str::random(8));
        } while (Order::where('order_number', $number)->exists());

        return $number;
    }

    private function payload(Order $order): array
    {
        return [
            'id' => $order->id,
            'order_number' => $order->order_number,
            'quote_number' => $order->quote_number,

            'customer_name' => $order->customer_name,
            'customer_email' => $order->customer_email,
            'customer_phone' => $order->customer_phone,
            'company' => $order->company,
            'job_name' => $order->job_name,

            'total_tags' => $order->total_tags,
            'total_pieces' => $order->total_pieces,

            'product_subtotal' => $order->product_subtotal,
            'product_total' => $order->product_total,
            'shipping_total' => $order->shipping_total,
            'grand_total' => $order->grand_total,

            'shipping_address' => $order->shipping_address,
            'billing_address' => $order->billing_address,
            'shipping_method' => $order->shipping_method,

            'payment_status' => $order->payment_status,
            'payment_method' => $order->payment_method,
            'card_last_four' => $order->card_last_four,

            'order_status' => $order->order_status,
            'proof_approved' => $order->proof_approved,
            'proof_approved_at' => $order->proof_approved_at?->toISOString(),

            'payload' => $order->payload,

            'items' => $order->items->map(fn($item) => [
                'id' => $item->id,
                'line_no' => $item->line_no,
                'qty' => $item->qty,
                'height' => $item->height,
                'width' => $item->width,
                'size_label' => $item->size_label,
                'color' => $item->color,
                'holes' => $item->holes,
                'hole_size' => $item->hole_size,
                'shape' => $item->shape,
                'text_content' => $item->text_content,
                'line_styles' => $item->line_styles,
                'unit_price' => $item->unit_price,
                'subtotal' => $item->subtotal,
                'payload' => $item->payload,
            ])->values(),

            'created_at' => $order->created_at?->toISOString(),
            'updated_at' => $order->updated_at?->toISOString(),
        ];
    }

    private function sendOrderEmails(Order $order): void
    {
        // Customer confirmation
        $customerSubject = 'Order Confirmation - ' . $order->order_number;

        $customerLog = EmailLog::create([
            'order_id' => $order->id,
            'type' => 'customer_order',
            'to_email' => $order->customer_email,
            'subject' => $customerSubject,
            'status' => 'pending',
            'payload' => [
                'order_number' => $order->order_number,
            ],
        ]);

        try {
            Mail::to($order->customer_email)->send(new CustomerOrderConfirmationMail($order));

            $customerLog->update([
                'status' => 'sent',
                'error_message' => null,
            ]);
        } catch (\Throwable $e) {
            $customerLog->update([
                'status' => 'failed',
                'error_message' => $e->getMessage(),
            ]);
        }

        // Internal production notification
        $productionEmail = config('mail.production_team_email')
            ?: env('PRODUCTION_TEAM_EMAIL');

        if (!$productionEmail) {
            return;
        }

        $productionSubject = 'New Production Order - ' . $order->order_number;

        $productionLog = EmailLog::create([
            'order_id' => $order->id,
            'type' => 'production_order',
            'to_email' => $productionEmail,
            'subject' => $productionSubject,
            'status' => 'pending',
            'payload' => [
                'order_number' => $order->order_number,
            ],
        ]);

        try {
            Mail::to($productionEmail)->send(new ProductionOrderNotificationMail($order));

            $productionLog->update([
                'status' => 'sent',
                'error_message' => null,
            ]);
        } catch (\Throwable $e) {
            $productionLog->update([
                'status' => 'failed',
                'error_message' => $e->getMessage(),
            ]);
        }
    }
}
