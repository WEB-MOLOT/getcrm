<?php

namespace App\Models\Pages;

use App\Models\Page;
use App\Models\Traits\HasSeo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomExperiencePage extends Page
{
    use HasFactory,
        HasSeo,
        SoftDeletes;

    protected $appends = [
        'content',
        'title1',
        'content1',
        'title2',
        'content2',
        'title3',
        'content3',
        'title4',
        'content4',
    ];

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'customer');
        });
    }
}
