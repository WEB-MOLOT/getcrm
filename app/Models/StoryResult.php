<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        return '/' . $this->after;
    }

    public function getBeforeUrl(): string
    {
        return '/' . $this->before;
    }

    public function story(): BelongsTo
    {
        return $this->belongsTo(SuccessStory::class);
    }
}
