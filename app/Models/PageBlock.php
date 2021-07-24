<?php

namespace App\Models;

use App\Casts\BlockTypeCast;
use App\Enums\BlockType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PageBlock
 * @package App\Models
 * @property BlockType $type
 */
class PageBlock extends Model
{
    use HasFactory,
        SoftDeletes;

    public const SEPARATOR = '||||||||';

    protected $fillable = [
        'page_id',
        'type',
        'label',
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
