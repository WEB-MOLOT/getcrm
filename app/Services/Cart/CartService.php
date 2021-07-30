<?php


namespace App\Services\Cart;


use Illuminate\Support\Collection;
use function collect;

class CartService
{
    protected Collection $items;

    protected ICartRepository $repository;

    /**
     * CartService constructor.
     * @param ICartRepository $repository
     */
    public function __construct(ICartRepository $repository)
    {
        $this->repository = $repository;

        $this->items = $repository->getItems();
    }

    public function add(int $id, string $name): CartService
    {
        $this->items->push([
            'id' => $id,
            'name' => $name,
        ]);

        $this->save();

        return $this;
    }

    public function removeById(int $id): CartService
    {
        $this->items = $this->items->reject(static function (array $item) use ($id) {
            return $id === $item['id'];
        });

        $this->save();

        return $this;
    }

    public function removeByName(string $name): CartService
    {
        $this->items = $this->items->reject(static function (array $item) use ($name) {
            return $name === $item['name'];
        });

        $this->save();

        return $this;
    }

    public function clear(): CartService
    {
        $this->items = collect();

        $this->save();

        return $this;
    }

    public function getItems(): Collection
    {
        return $this->items;
    }

    protected function save(): void
    {
        $this->repository->save($this->getItems());
    }
}
