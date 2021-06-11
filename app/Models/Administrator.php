<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Administrator extends User
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope('admin', function (Builder $builder) {
            $builder->where('is_admin', '=', 1);
        });
    }
}
