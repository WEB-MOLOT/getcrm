<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class StoryResult extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'before',
        'after',
        'description',
        'success_story_id',
    ];

    public function getAfterUrl(): string
    {
        if (Str::startsWith($this->after, 'http')) {
            return $this->after;
        }

        return '/' . $this->after;
    }

    public function getBeforeUrl(): string
    {
        if (Str::startsWith($this->before, 'http')) {
            return $this->before;
        }

        return '/' . $this->before;
    }

    public function story(): BelongsTo
    {
        return $this->belongsTo(SuccessStory::class);
    }
}
