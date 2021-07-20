<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsItem extends Model
{
    use HasFactory,
        SeoTrait,
        SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'image',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getImageUrl(): string
    {
        return '/' . $this->image;
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected function getSeoDefaultTitle(): string
    {
        return $this->title;
    }

    protected function getSeoDefaultDescription(): string
    {
        return $this->description;
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at');
    }

    public function scopeYear(Builder $query, string $year): Builder
    {
        return $query->whereYear('published_at', $year);
    }
}
