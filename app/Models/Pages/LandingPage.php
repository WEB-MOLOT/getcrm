<?php

namespace App\Models\Pages;

use App\Models\Page;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LandingPage extends Page
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope('page', function (Builder $builder) {
            $builder->where('slug', '=', 'landing');
        });
    }
}
