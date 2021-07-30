<?php

namespace App\Http\Controllers\Site\Ajax\Cart;

use App\Http\Controllers\Controller;
use App\Services\Cart\CartService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeleteController extends Controller
{

    /**
     * Удаление элемента их корзины
     */
    public function __invoke(Request $request, CartService $cart, int $id): JsonResponse
    {
        $items = $cart->removeById($id)->getItems();

        return response()->json(data: [
            'status' => true,
            'data' => $items,
        ], options: JSON_UNESCAPED_UNICODE);
    }
}
