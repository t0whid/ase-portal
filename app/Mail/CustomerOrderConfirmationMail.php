<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class CustomerOrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order->loadMissing(['items', 'files']);
    }

    public function build()
    {
        $mail = $this->subject('Order Confirmation - ' . $this->order->order_number)
            ->view('emails.customer-order-confirmation')
            ->with([
                'order' => $this->order,
            ]);

        foreach ($this->order->files as $file) {
            if (Storage::disk('local')->exists($file->path)) {
                $mail->attach(Storage::disk('local')->path($file->path), [
                    'as' => $file->filename,
                    'mime' => $file->mime_type ?: 'application/pdf',
                ]);
            }
        }

        return $mail;
    }
}