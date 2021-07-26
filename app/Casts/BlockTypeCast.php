<?php

namespace App\Casts;

use App\Enums\BlockType;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use JetBrains\PhpStorm\Pure;

class BlockTypeCast implements CastsAttributes
{
    #[Pure]
    public function get($model, string $key, $value, array $attributes): BlockType
    {
        return new BlockType($value);
    }

    #[Pure]
    public function set($model, string $key, $value, array $attributes)
    {
        if (!$value instanceof BlockType) {
            return $value;
        }

        return $value->value();
    }
}
