<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Administrator extends User
{
    use HasFactory,
        SoftDeletes;

    protected static function booted()
    {
        static::addGlobalScope('admin', static function (Builder $builder) {
            $builder->where('is_admin', '=', 1);
        });

        static::creating(static function (Administrator $user) {
            $user->is_admin = 1;
            $user->email_verified_at = now();
        });
    }
}
