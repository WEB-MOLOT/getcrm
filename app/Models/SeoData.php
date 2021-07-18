<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeoData extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'seoable_id',
        'seoable_type',
        'title',
        'keywords',
        'description',
        'disable_index',
    ];

    protected $casts = [
        'disable_index' => 'boolean',
    ];

    public function isDisabledIndex(): bool
    {
        return $this->disable_index;
    }

    public function seoable(): MorphTo
    {
        return $this->morphTo();
    }
}
