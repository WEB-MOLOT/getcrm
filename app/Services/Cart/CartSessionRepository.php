<?php


namespace App\Services\Cart;


use Illuminate\Support\Collection;
use function collect;
use function session;

class CartSessionRepository implements ICartRepository
{
    protected string $key = 'cart';

    public function save(Collection $items): Collection
    {
        session()->put($this->key, $items->toJson());

        session()->save();

        return $this->getItems();
    }

    public function getItems(): Collection
    {
        $items = session()->get($this->key, null);

        if (empty($items)) {
            return collect();
        }

        $items = json_decode($items, true);

        return collect($items);
    }
}
