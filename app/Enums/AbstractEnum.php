<?php


namespace App\Enums;


use JetBrains\PhpStorm\Pure;

abstract class AbstractEnum
{
    protected int|string|null $item;

    /**
     * Role constructor.
     * @param int|string|null $item
     */
    public function __construct(int|string|null $item)
    {
        $this->item = $item;
    }

    public abstract static function labels();

    public abstract static function values();

    public function label(): ?string
    {
        $labels = static::labels();

        if (array_key_exists($this->item, $labels)) {
            return $labels[$this->item];
        }

        return null;
    }

    public function value(): int|string|null
    {
        return $this->item;
    }

    #[Pure]
    public function __toString(): string
    {
        return (string)$this->value();
    }
}
