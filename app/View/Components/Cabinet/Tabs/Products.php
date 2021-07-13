<?php

namespace App\View\Components\Cabinet\Tabs;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Products extends Component
{
    protected Collection $activeProducts;

    protected Collection $oldProducts;

    public function __construct()
    {
        /** @var User $user */
        $user = auth()->user();

        $this->activeProducts = $user->products()->active()->oldest('finished_at')->get();

        $this->oldProducts = $user->products()->old()->latest('finished_at')->get();
    }

    public function render(): string
    {
        return view('components.cabinet.tabs.products', [
            'products' => $this->activeProducts->merge($this->oldProducts),
        ]);
    }
}
