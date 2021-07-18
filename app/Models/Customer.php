<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends User
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope('customer', function (Builder $builder) {
            $builder->where('is_admin', '=', 0);
        });

        static::creating(function (Customer $user) {
            $user->is_admin = 0;
            $user->email_verified_at = now();
        });
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
