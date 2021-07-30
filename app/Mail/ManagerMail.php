<?php

namespace App\Mail;

use App\Models\Dictionaries\Solution;
use App\Services\Cart\CartService;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ManagerMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build(CartService $cartService): self
    {
        return $this->text('emails.manager', [
            'cartSolutions' => Solution::find($cartService->getItems()->pluck('id')->toArray())->load('functionalities'),
        ])
            ->replyTo($this->data['email'], $this->data['name'])
            ->subject('Письмо с формы конфигуратора');
    }
}
