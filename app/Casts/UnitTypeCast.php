<?php

namespace App\Casts;

use App\Enums\UnitType;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use JetBrains\PhpStorm\Pure;

class UnitTypeCast implements CastsAttributes
{
    #[Pure]
    public function get($model, string $key, $value, array $attributes): UnitType
    {
        return new UnitType($value);
    }

    #[Pure]
    public function set($model, string $key, $value, array $attributes)
    {
        if (!$value instanceof UnitType) {
            return $value;
        }

        return $value->value();
    }
}
