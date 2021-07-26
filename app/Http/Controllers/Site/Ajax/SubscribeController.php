<?php

namespace App\Http\Controllers\Site\Ajax;

use App\Http\Controllers\Controller;
use App\Mail\SubscriberMail;
use App\Mail\SubscriptionMail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use function config;
use function response;

class SubscribeController extends Controller
{
    /**
     * Подписка на рассылку
     */
    public function __invoke(Request $request): Response
    {
        $subscriberEmail = $request->get('email');

        Mail::to(config('site.email.subscribe'))->send(new SubscriptionMail($subscriberEmail));

        Mail::to($subscriberEmail)->send(new SubscriberMail);

        return response('', 204);
    }
}
