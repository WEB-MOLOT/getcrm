<?php

namespace App\Casts;

use App\Enums\MenuType;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use JetBrains\PhpStorm\Pure;

class MenuTypeCast implements CastsAttributes
{
    #[Pure]
    public function get($model, string $key, $value, array $attributes)
    {
        return new MenuType($value);
    }

    #[Pure]
    public function set($model, string $key, $value, array $attributes)
    {
        if (!$value instanceof MenuType) {
            return $value;
        }

        return $value->value();
    }
}
