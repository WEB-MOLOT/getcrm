<?php

namespace App\View\Components\Cabinet;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class UserProducts extends Component
{
    protected Collection $products;

    public function __construct()
    {
        /** @var User $user */
        $user = auth()->user();

        $this->products = $user->products()->limit(3)->active()->oldest('finished_at')->get();
    }

    public function render(): string
    {
        return view('components.cabinet.user-products', [
            'products' => $this->products,
        ]);
    }
}
