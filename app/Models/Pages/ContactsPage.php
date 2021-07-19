<?php

namespace App\Models\Pages;

use App\Models\Page;
use App\Models\SeoTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactsPage extends Page
{
    use HasFactory,
        SeoTrait,
        SoftDeletes;

    protected $appends = [
        'phone',
        'address',
    ];

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'contacts');
        });
    }

    public function clearedPhone(): string
    {
        return preg_replace('/[^0-9+]/', '', $this->phone);
    }
}
