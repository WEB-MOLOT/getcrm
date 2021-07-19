<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoryBadge extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'title',
        'value',
        'success_story_id',
    ];

    public function story(): BelongsTo
    {
        return $this->belongsTo(SuccessStory::class);
    }
}
