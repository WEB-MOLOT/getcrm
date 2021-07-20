<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reviewable_type',
        'reviewable_id',
        'text',
        'score',
        'score_development',
        'score_usability',
        'score_team',
        'score_budget',
        'score_deadlines',
        'is_moderated',
    ];

    protected $casts = [
        'is_moderated' => 'bool',
        'score' => 'decimal:1',
        'score_development' => 'decimal:0',
        'score_usability' => 'decimal:0',
        'score_team' => 'decimal:0',
        'score_budget' => 'decimal:0',
        'score_deadlines' => 'decimal:0',
    ];

    public function scopeModerated(Builder $query): Builder
    {
        return $query->where('is_moderated', '=', 1);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }

    public function reviewable(): MorphTo
    {
        return $this->morphTo();
    }
}
