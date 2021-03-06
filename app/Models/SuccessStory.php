<?php

namespace App\Models;

use App\Models\Traits\HasSeo;
use App\Models\Traits\ImageLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuccessStory extends Model
{
    use HasFactory,
        HasSeo,
        ImageLink,
        SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'logo',
        'logo2',
    ];

    public function getLogoUrl(): string
    {
        return $this->makeUrl($this->logo);
    }

    public function getLogo2Url(): string
    {
        return $this->makeUrl($this->logo2);
    }

    public function getImageUrl(): string
    {
        return $this->makeUrl($this->image);
    }

    public function badges(): HasMany
    {
        return $this->hasMany(StoryBadge::class);
    }

    public function result(): HasOne
    {
        return $this->hasOne(StoryResult::class);
    }

    public function shorts(): HasMany
    {
        return $this->hasMany(StoryShort::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(StoryTask::class);
    }

    public function solutions(): HasMany
    {
        return $this->hasMany(StorySolution::class);
    }

    protected function getSeoDefaultTitle(): string
    {
        return $this->title;
    }
}
