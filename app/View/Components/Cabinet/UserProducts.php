<?php

namespace App\View\Components\Cabinet;

use App\Models\User;
use App\Models\UserProduct;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class UserProducts extends Component
{
    protected Collection $products;

    public function __construct()
    {
        /** @var User $user */
        $user = auth()->user();

        /** @var UserProduct $products */

        $this->products = $user->products()->active()->limit(3)->oldest('finished_at')->get();
    }

    public function render(): string
    {
        return view('components.cabinet.user-products', [
            'products' => $this->products,
        ]);
    }
}
