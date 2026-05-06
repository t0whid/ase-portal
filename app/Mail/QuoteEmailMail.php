<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteEmailMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $quoteData;

    public function __construct(array $quoteData)
    {
        $this->quoteData = $quoteData;
    }

    public function build()
    {
        $quoteNumber = $this->quoteData['quote_number'] ?? 'Instant Quote';

        return $this->subject('Your Accurate Signs Quote - ' . $quoteNumber)
            ->view('emails.quote-email')
            ->with([
                'quote' => $this->quoteData,
            ]);
    }
}