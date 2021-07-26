<?php

namespace App\Casts;

use App\Enums\SettingSection;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use JetBrains\PhpStorm\Pure;

class SettingTypeCast implements CastsAttributes
{
    #[Pure]
    public function get($model, string $key, $value, array $attributes): SettingSection
    {
        return new SettingSection($value);
    }

    #[Pure]
    public function set($model, string $key, $value, array $attributes)
    {
        if (!$value instanceof SettingSection) {
            return $value;
        }

        return $value->value();
    }
}
