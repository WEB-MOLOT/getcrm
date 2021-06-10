<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuccessStory extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'logo',
        'short_about',
        'tasks',
        'solution',
    ];

    protected $casts = [
        'short_about' => 'array',
        'tasks' => 'array',
        'solution' => 'array',
    ];

    public function getLogoUrl(): string
    {
        return '/' . $this->logo;
    }

    public function getImageUrl(): string
    {
        return '/' . $this->image;
    }

    public function badges(): HasMany
    {
        return $this->hasMany(SuccessStoryBadge::class);
    }

    public function results(): HasMany
    {
        return $this->hasMany(SuccessStoryResult::class);
    }
}
