<?php

namespace App\Models;

use App\Models\Dictionaries;
use App\Models\Traits\HasSeo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use SleepingOwl\Admin\Traits\OrderableModel;

class Service extends Model
{
    use HasFactory,
        OrderableModel,
        HasSeo,
        SoftDeletes;

    protected $fillable = [
        'solution_id',
        'title',
        'subtitle',
        'image',
        'video',
        'description',
        'order',
    ];

    public function solution(): BelongsTo
    {
        return $this->belongsTo(Dictionaries\Solution::class, 'solution_id');
    }

    public function descriptions(): HasMany
    {
        return $this->hasMany(ServiceDescription::class);
    }

    public function standarts(): HasMany
    {
        return $this->hasMany(ServiceStandart::class);
    }

    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function faqItems(): MorphMany
    {
        return $this->morphMany(FaqItem::class, 'faqable');
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
        return $this->title;
    }

    protected function getSeoDefaultDescription(): string
    {
        return $this->description;
    }
}
