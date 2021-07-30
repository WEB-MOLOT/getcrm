<?php

namespace App\Http\Controllers\Export;

use App\Http\Controllers\Controller;
use App\Models\Dictionaries\Solution;
use App\Services\Cart\CartService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PDF;

class CartController extends Controller
{
    /**
     * Экспорт содержимого корзины в PDF
     */
    public function __invoke(Request $request, CartService $cartService): Response
    {
        $data = [
            'cartItems' => $cartService->getItems(),
            'cartSolutions' => Solution::find($cartService->getItems()->pluck('id')->toArray())->load('functionalities'),
        ];

        $pdf = PDF::loadView('export.cart', $data)->setOptions([
            'dpi' => 150,
            'defaultFont' => 'arialuni.ttf'
        ]);

        return $pdf->download('cart.pdf');
    }
}
