<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\CustomerOrderConfirmationMail;
use App\Mail\ProductionOrderNotificationMail;
use App\Models\EmailLog;
use App\Models\Order;
use App\Models\OrderFile;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\Webhook;

class PaymentController extends Controller
{
    public function createCheckoutSession(Request $request)
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
            'grand_total' => ['required', 'numeric', 'min:0.5'],

            'shipping_address' => ['nullable', 'array'],
            'billing_address' => ['nullable', 'array'],
            'shipping_method' => ['nullable', 'string', 'max:100'],

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

            'generated_files' => ['nullable', 'array'],
            'generated_files.*.type' => ['required_with:generated_files', 'string', 'max:100'],
            'generated_files.*.filename' => ['required_with:generated_files', 'string', 'max:255'],
            'generated_files.*.html' => ['required_with:generated_files', 'string'],

            'payload' => ['required', 'array'],
        ]);

        $stripeSecret = config('services.stripe.secret');

        if (!$stripeSecret) {
            return response()->json([
                'success' => false,
                'message' => 'Stripe secret key is missing.',
            ], 500);
        }

        Stripe::setApiKey($stripeSecret);

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

                'payment_status' => 'pending',
                'payment_method' => 'stripe',
                'stripe_payment_status' => 'pending',

                'order_status' => 'pending_payment',
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

            return $order->load(['items', 'files']);
        });

        $this->storeGeneratedFiles($order, $data['generated_files'] ?? []);
        $order->load(['items', 'files']);

        $successUrl = config('services.stripe.success_url') ?: url('/payment/success');
        $cancelUrl = config('services.stripe.cancel_url') ?: url('/payment/cancel');

        try {
            $session = Session::create([
                'mode' => 'payment',
                'payment_method_types' => ['card'],
                'customer_email' => $order->customer_email,
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => 'Accurate Signs Order ' . $order->order_number,
                                'description' => $order->job_name ?: 'Laser-engraved plastic tags and labels',
                            ],
                            'unit_amount' => (int) round(((float) $order->grand_total) * 100),
                        ],
                        'quantity' => 1,
                    ],
                ],
                'metadata' => [
                    'order_id' => (string) $order->id,
                    'order_number' => $order->order_number,
                ],
                'success_url' => $successUrl . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => $cancelUrl . '?order_number=' . urlencode($order->order_number),
            ]);

            $order->update([
                'stripe_checkout_session_id' => $session->id,
                'stripe_payment_status' => $session->payment_status ?? 'unpaid',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Stripe checkout session created.',
                'data' => [
                    'checkout_url' => $session->url,
                    'session_id' => $session->id,
                    'order' => $this->payload($order->fresh(['items', 'files'])),
                ],
            ]);
        } catch (\Throwable $e) {
            $order->update([
                'payment_status' => 'failed',
                'stripe_payment_status' => 'failed',
                'order_status' => 'payment_failed',
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to create Stripe checkout session.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $signature = $request->header('Stripe-Signature');
        $secret = config('services.stripe.webhook_secret');

        if (!$secret) {
            return response()->json([
                'success' => false,
                'message' => 'Stripe webhook secret is missing.',
            ], 500);
        }

        try {
            $event = Webhook::constructEvent($payload, $signature, $secret);
        } catch (\UnexpectedValueException $e) {
            return response()->json(['message' => 'Invalid payload.'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            return response()->json(['message' => 'Invalid signature.'], 400);
        }

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;
            $this->handleCheckoutCompleted($session);
        }

        if ($event->type === 'checkout.session.expired') {
            $session = $event->data->object;
            $this->handleCheckoutExpired($session);
        }

        if ($event->type === 'checkout.session.async_payment_failed') {
            $session = $event->data->object;
            $this->handleCheckoutFailed($session);
        }

        return response()->json(['success' => true]);
    }

    private function handleCheckoutCompleted($session): void
    {
        $orderId = $session->metadata->order_id ?? null;

        if (!$orderId) {
            return;
        }

        $order = Order::with(['items', 'files'])->find($orderId);

        if (!$order) {
            return;
        }

        $alreadyPaid = $order->payment_status === 'paid';

        $order->update([
            'payment_status' => 'paid',
            'payment_method' => 'stripe',
            'stripe_checkout_session_id' => $session->id ?? $order->stripe_checkout_session_id,
            'stripe_payment_intent_id' => $session->payment_intent ?? null,
            'stripe_payment_status' => $session->payment_status ?? 'paid',
            'paid_at' => now(),
            'order_status' => 'submitted',
        ]);

        if (!$alreadyPaid) {
            $order->refresh()->load(['items', 'files']);
            $this->sendOrderEmails($order);
        }
    }

    private function handleCheckoutExpired($session): void
    {
        $orderId = $session->metadata->order_id ?? null;

        if (!$orderId) {
            return;
        }

        Order::where('id', $orderId)->update([
            'payment_status' => 'expired',
            'stripe_checkout_session_id' => $session->id ?? null,
            'stripe_payment_status' => 'expired',
            'order_status' => 'payment_expired',
        ]);
    }

    private function handleCheckoutFailed($session): void
    {
        $orderId = $session->metadata->order_id ?? null;

        if (!$orderId) {
            return;
        }

        Order::where('id', $orderId)->update([
            'payment_status' => 'failed',
            'stripe_checkout_session_id' => $session->id ?? null,
            'stripe_payment_status' => 'failed',
            'order_status' => 'payment_failed',
        ]);
    }

    private function storeGeneratedFiles(Order $order, array $files): void
    {
        foreach ($files as $file) {
            $type = $file['type'] ?? null;
            $filename = $file['filename'] ?? null;
            $html = $file['html'] ?? null;

            if (!$type || !$filename || !$html) {
                continue;
            }

            $safeFilename = preg_replace('/[^A-Za-z0-9_\-.]/', '_', $filename);

            if (!str_ends_with(strtolower($safeFilename), '.pdf')) {
                $safeFilename .= '.pdf';
            }

            $directory = 'order-files/' . $order->order_number;
            $path = $directory . '/' . $safeFilename;

            try {
                $pdf = Pdf::loadHTML($html)
                    ->setPaper('letter', 'portrait');

                $pdfBinary = $pdf->output();

                Storage::disk('local')->put($path, $pdfBinary);

                OrderFile::create([
                    'order_id' => $order->id,
                    'type' => $type,
                    'filename' => $safeFilename,
                    'path' => $path,
                    'mime_type' => 'application/pdf',
                    'size_bytes' => strlen($pdfBinary),
                ]);
            } catch (\Throwable $e) {
                EmailLog::create([
                    'order_id' => $order->id,
                    'type' => 'pdf_generation_failed',
                    'to_email' => $order->customer_email,
                    'subject' => 'PDF generation failed - ' . $order->order_number,
                    'status' => 'failed',
                    'error_message' => $e->getMessage(),
                    'payload' => [
                        'file_type' => $type,
                        'filename' => $filename,
                    ],
                ]);
            }
        }
    }

    private function sendOrderEmails(Order $order): void
    {
        $order->loadMissing(['items', 'files']);

        $customerLog = EmailLog::create([
            'order_id' => $order->id,
            'type' => 'customer_order',
            'to_email' => $order->customer_email,
            'subject' => 'Order Confirmation - ' . $order->order_number,
            'status' => 'pending',
            'payload' => [
                'order_number' => $order->order_number,
                'attached_files_count' => $order->files->count(),
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

        $productionEmail = config('mail.production_team_email')
            ?: env('PRODUCTION_TEAM_EMAIL');

        if (!$productionEmail) {
            return;
        }

        $productionLog = EmailLog::create([
            'order_id' => $order->id,
            'type' => 'production_order',
            'to_email' => $productionEmail,
            'subject' => 'New Production Order - ' . $order->order_number,
            'status' => 'pending',
            'payload' => [
                'order_number' => $order->order_number,
                'attached_files_count' => $order->files->count(),
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

    private function generateOrderNumber(): string
    {
        do {
            $number = 'ORD-' . strtoupper(Str::random(8));
        } while (Order::where('order_number', $number)->exists());

        return $number;
    }

    private function payload(Order $order): array
    {
        $order->loadMissing(['items', 'files']);

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

            'stripe_checkout_session_id' => $order->stripe_checkout_session_id,
            'stripe_payment_intent_id' => $order->stripe_payment_intent_id,
            'stripe_payment_status' => $order->stripe_payment_status,
            'paid_at' => $order->paid_at?->toISOString(),

            'order_status' => $order->order_status,
            'proof_approved' => $order->proof_approved,
            'proof_approved_at' => $order->proof_approved_at?->toISOString(),

            'payload' => $order->payload,

            'items' => $order->items->map(fn ($item) => [
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

            'files' => $order->files->map(fn ($file) => [
                'id' => $file->id,
                'type' => $file->type,
                'filename' => $file->filename,
                'path' => $file->path,
                'mime_type' => $file->mime_type,
                'size_bytes' => $file->size_bytes,
                'created_at' => $file->created_at?->toISOString(),
            ])->values(),

            'created_at' => $order->created_at?->toISOString(),
            'updated_at' => $order->updated_at?->toISOString(),
        ];
    }
}