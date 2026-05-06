<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductionOrderNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order->loadMissing('items');
    }

    public function build()
    {
        return $this->subject('New Production Order - ' . $this->order->order_number)
            ->view('emails.production-order-notification')
            ->with([
                'order' => $this->order,
            ]);
    }
}