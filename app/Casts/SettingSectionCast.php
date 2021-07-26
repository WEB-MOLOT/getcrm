<?php

namespace App\Casts;

use App\Enums\SettingType;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use JetBrains\PhpStorm\Pure;

class SettingSectionCast implements CastsAttributes
{
    #[Pure]
    public function get($model, string $key, $value, array $attributes): SettingType
    {
        return new SettingType($value);
    }

    #[Pure]
    public function set($model, string $key, $value, array $attributes)
    {
        if (!$value instanceof SettingType) {
            return $value;
        }

        return $value->value();
    }
}
