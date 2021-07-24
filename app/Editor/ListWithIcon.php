<?php


namespace App\Editor;


use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ListWithIcon
{
    protected string $original;

    protected Collection $items;

    /**
     * ListWithIcon constructor.
     * @param string $original
     */
    public function __construct(string $original)
    {
        $this->original = $original;

        $this->items = collect();

        $parts = json_decode($original);

        foreach ($parts as $part) {
            $this->items->add([
                'name' => $part->name,
                'icon' => Str::startsWith($part->icon, 'http') ? $part->icon : url($part->icon),
            ]);
        }
    }

    public function getItems(): Collection
    {
        return $this->items;
    }
}
