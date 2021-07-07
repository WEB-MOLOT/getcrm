<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    /**
     * Подписка на рассылку
     */
    public function __invoke(Request $request): Response
    {
        $subscriberEmail = $request->get('email');

        $subscribeEmail = config('site.email.subscribe');;

        $text = <<< EOL
$subscriberEmail - посетитель сайта подписался на рассылку
EOL;

        Mail::raw($text, static function ($message) use ($subscribeEmail) {
            $message->to($subscribeEmail, 'Лист рассылки')
                ->subject('Новый подписчик на рассылку');
        });

        return response('', 204);
    }
}
