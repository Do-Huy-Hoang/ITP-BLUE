<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderNotification extends Mailable
{
    use Queueable, SerializesModels;
    public array $content;

    public function __construct(array $content) {
        $this->content = $content;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->content['subject'],
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'emails.bill',
            with: [
                'order' => $this->content['order'],
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
