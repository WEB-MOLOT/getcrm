<?php


namespace App\Services\Cart;


use Illuminate\Support\Collection;

interface ICartRepository
{
    public function save(Collection $items): Collection;

    public function getItems(): Collection;
}
