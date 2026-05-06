<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\QuoteEmailMail;
use App\Models\EmailLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendQuote(Request $request)
    {
        $data = $request->validate([
            'to_email' => ['required', 'email', 'max:255'],
            'quote_number' => ['nullable', 'string', 'max:100'],
            'customer_name' => ['nullable', 'string', 'max:255'],
            'job_name' => ['nullable', 'string', 'max:255'],
            'total_pieces' => ['nullable', 'integer', 'min:0'],
            'product_total' => ['nullable', 'numeric', 'min:0'],
            'items' => ['nullable', 'array'],
            'payload' => ['nullable', 'array'],
        ]);

        $subject = 'Your Accurate Signs Quote - ' . ($data['quote_number'] ?? 'Instant Quote');

        $log = EmailLog::create([
            'type' => 'quote_email',
            'to_email' => $data['to_email'],
            'subject' => $subject,
            'status' => 'pending',
            'payload' => $data,
        ]);

        try {
            Mail::to($data['to_email'])->send(new QuoteEmailMail($data));

            $log->update([
                'status' => 'sent',
                'error_message' => null,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Quote email sent successfully.',
            ]);
        } catch (\Throwable $e) {
            $log->update([
                'status' => 'failed',
                'error_message' => $e->getMessage(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to send quote email.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}