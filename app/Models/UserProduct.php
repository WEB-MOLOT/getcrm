<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProduct extends Model
{
    /** @var int За сколько дней до конца лицензии начинать помечать продукт */
    public const MARK = 20;

    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'finished_at',
    ];

    protected $casts = [
        'finished_at' => 'datetime',
    ];

    public function getProgress(): int
    {
        $maxDays = $this->finished_at->diffInDays($this->created_at);

        return round($this->getRemainingDays() / $maxDays * 100);
    }

    public function hasMark(): bool
    {
        return $this->isActive() && $this->getProgress() < self::MARK;
    }

    public function getProgressClass(): string
    {
        $remainingDays = $this->getRemainingDays();

        if ($remainingDays > 270) {
            return 'green';
        }

        if ($remainingDays > 90) {
            return 'yel';
        }

        return '';
    }

    public function isActive(): bool
    {
        return $this->finished_at->greaterThan(now());
    }

    public function getRemainingDays(): int
    {
        return $this->finished_at->diffInDays(now());
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('finished_at', '>', now()->format('Y-m-d H:i:s'));
    }

    public function scopeOld(Builder $query): Builder
    {
        return $query->where('finished_at', '<=', now()->format('Y-m-d H:i:s'));
    }

    public function scopeMark(Builder $query): Builder
    {
        return $query->where('finished_at', '<', now()->addDays(self::MARK)->format('Y-m-d H:i:s'));
    }
}
