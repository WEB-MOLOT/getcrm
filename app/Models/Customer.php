<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends User
{
    use HasFactory,
        SoftDeletes;

    protected static function booted()
    {
        static::addGlobalScope('customer', static function (Builder $builder) {
            $builder->where('is_admin', '=', 0);
        });

        static::creating(static function (Customer $user) {
            $user->is_admin = 0;
            $user->email_verified_at = now();
        });
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
