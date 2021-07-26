<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SaleMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build(): self
    {
        return $this->text('emails.sale')
            ->replyTo($this->data['mail'], $this->data['name'])
            ->subject('Письмо с формы отдела продаж');
    }
}
