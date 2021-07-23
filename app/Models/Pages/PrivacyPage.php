<?php

namespace App\Models\Pages;

use App\Models\Page;
use App\Models\Traits\HasSeo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrivacyPage extends Page
{
    use HasFactory,
        HasSeo,
        SoftDeletes;

    protected $appends = [
        'content',
    ];

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'privacy');
        });
    }
}
