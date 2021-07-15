<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory,
        Notifiable,
        VerifiesEmails,
        SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'firm',
        'email',
        'subscribe_email',
        'has_subscription',
        'phones',
        'position',
        'password',
        'is_admin',
        'company_id',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
        'is_admin' => 'boolean',
        'has_subscription' => 'boolean',
        'phones' => 'string',
    ];

    public function isAdmin(): bool
    {
        return $this->is_admin;
    }

    public function hasSubscription(): bool
    {
        return $this->has_subscription;
    }

    public function setSubscribeEmailAttribute($value)
    {
        $this->attributes['subscribe_email'] = empty($value) ? null : $value;
    }

    public function products(): HasMany
    {
        return $this->hasMany(UserProduct::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(UserDocument::class);
    }
}
