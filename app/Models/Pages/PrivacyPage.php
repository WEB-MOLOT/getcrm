<?php

namespace App\Models\Pages;

use App\Models\Page;
use App\Models\SeoTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

class PrivacyPage extends Page
{
    use HasFactory,
        SeoTrait,
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

    public function getContentAttribute()
    {
        Log::debug('getContentAttribute');
        return $this->block('content');
    }

    public function setContentAttribute($value)
    {
        Log::debug('setContentAttribute');
        $this->saveBlock('content', $value);
    }
}
