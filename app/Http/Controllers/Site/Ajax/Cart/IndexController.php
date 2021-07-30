<?php

namespace App\Http\Controllers\Site\Ajax\Cart;

use App\Http\Controllers\Controller;
use App\Services\Cart\CartService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Содержимое корзины
     */
    public function __invoke(Request $request, CartService $cart): JsonResponse
    {
        $items = $cart->getItems();

        return response()->json(data: [
            'data' => $items,
        ], options: JSON_UNESCAPED_UNICODE);
    }
}
