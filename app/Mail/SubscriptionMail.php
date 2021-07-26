<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Письма с уведомлением о новых подписчике
 *
 * Class SubscriptionMail
 * @package App\Mail
 */
class SubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function build(): SubscriptionMail
    {
        return $this->view('emails.subscription')
            ->subject('Новый подписчик на рассылку');
    }
}
