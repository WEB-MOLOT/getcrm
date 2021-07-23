<?php


namespace App\Models\Traits;


use Illuminate\Support\Str;

trait ImageLink
{
    protected function makeUrl(?string $path): ?string
    {
        if (empty($path)) {
            return null;
        }

        if (Str::startsWith($path, 'http')) {
            return $path;
        }

        return url($path);
    }
}
