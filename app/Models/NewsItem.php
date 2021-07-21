<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class NewsItem extends Model
{
    use HasFactory,
        HasSeo,
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
        if (Str::startsWith($this->image, 'http')) {
            return $this->image;
        }

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
