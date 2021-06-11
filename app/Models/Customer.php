<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends User
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope('customer', function (Builder $builder) {
            $builder->where('is_admin', '=', 0);
        });
    }
}
