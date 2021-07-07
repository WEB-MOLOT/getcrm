<?php

namespace App\Models;

use App\Casts\BlockTypeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageBlock extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'page_id',
        'type',
        'slug',
        'is_visible',
        'content',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
        'content' => 'object',
        'type' => BlockTypeCast::class,
    ];

    public function isVisible(): bool
    {
        return $this->is_visible;
    }
}
