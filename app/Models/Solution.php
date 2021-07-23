<?php

namespace App\Models;

use App\Models\Traits\HasSeo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use SleepingOwl\Admin\Traits\OrderableModel;

class Solution extends Model
{
    use HasFactory,
        OrderableModel,
        HasSeo,
        SoftDeletes;

    protected $fillable = [
        'solution_id',
        'subtitle',
        'image',
        'video',
        'description',
        'booklet',
        'order',
    ];

    protected $with = [
        'solution',
    ];

    protected $appends = [
        'title',
    ];

    public function getTitleAttribute(): string
    {
        return $this->solution->name;
    }

    public function descriptions(): HasMany
    {
        return $this->hasMany(SolutionDescription::class);
    }

    public function effects(): HasMany
    {
        return $this->hasMany(SolutionEffect::class);
    }

    public function solution(): BelongsTo
    {
        return $this->belongsTo(Dictionaries\Solution::class, 'solution_id');
    }

    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function faqItems(): MorphMany
    {
        return $this->morphMany(FaqItem::class, 'faqable');
    }

    public function getBookletUrl(): ?string
    {
        if ($this->booklet) {
            return url($this->booklet);
        }

        return null;
    }

    public function getImageUrl(): ?string
    {
        if ($this->image) {
            return url($this->image);
        }

        return null;
    }

    protected function getSeoDefaultTitle(): string
    {
        return $this->solution->name;
    }

    protected function getSeoDefaultDescription(): string
    {
        return $this->description;
    }
}
