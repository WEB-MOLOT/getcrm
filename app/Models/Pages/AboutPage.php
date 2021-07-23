<?php

namespace App\Models\Pages;

use App\Models\Page;
use App\Models\Traits\HasSeo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutPage extends Page
{
    use HasFactory,
        HasSeo,
        SoftDeletes;

    protected $appends = [
        'content',
        'xxx',
        'xxx1',
        'xxx2',
        'xxx3',
        'xxx4',
    ];

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'about');
        });
    }
}
