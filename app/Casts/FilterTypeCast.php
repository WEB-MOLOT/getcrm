<?php

namespace App\Casts;

use App\Enums\FilterType;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use JetBrains\PhpStorm\Pure;

class FilterTypeCast implements CastsAttributes
{
    #[Pure]
    public function get($model, string $key, $value, array $attributes)
    {
        return new FilterType($value);
    }

    #[Pure]
    public function set($model, string $key, $value, array $attributes)
    {
        if (!$value instanceof FilterType) {
            return $value;
        }

        return $value->value();
    }
}
