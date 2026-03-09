<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LeadEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $name,
        public string $email,
        public string $phone,
        public string $event,
        public string $location,
        public string $message,
        public string $submittedAt,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Lead: ' . $this->name . ' - Vidhu Slathia Website',
            replyTo: [$this->email],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.lead',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
