<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\ManagerMail;
use App\Services\Cart\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ManagerController extends Controller
{
    public function __invoke(Request $request, CartService $cartService): \Illuminate\Http\RedirectResponse
    {
        Mail::to(config('site.email.sale'))->send(new ManagerMail($request->all()));

        $cartService->clear();

        return response()->redirectTo('/')->with('success', 'Ваш запрос отправлен');
    }
}
