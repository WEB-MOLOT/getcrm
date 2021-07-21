<?php

namespace App\Models\Pages;

use App\Models\HasSeo;
use App\Models\Page;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandingPage extends Page
{
    use HasFactory,
        HasSeo,
        SoftDeletes;

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'dimarke');
        });
    }
}
