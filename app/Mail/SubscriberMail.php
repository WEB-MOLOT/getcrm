<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Письмо для подписчика
 *
 * Class SubscriberMail
 * @package App\Mail
 */
class SubscriberMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function build(): self
    {
        return $this->text('emails.subscriber')
            ->subject('Подписка на рассылку');
    }
}
