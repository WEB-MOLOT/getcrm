<?php

namespace App\Models;

use App\Models\Traits\ImageLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoryResult extends Model
{
    use HasFactory,
        ImageLink,
        SoftDeletes;

    protected $fillable = [
        'before',
        'after',
        'description',
        'success_story_id',
    ];

    public function getAfterUrl(): string
    {
        return $this->makeUrl($this->after);
    }

    public function getBeforeUrl(): string
    {
        return $this->makeUrl($this->before);
    }

    public function story(): BelongsTo
    {
        return $this->belongsTo(SuccessStory::class);
    }
}
