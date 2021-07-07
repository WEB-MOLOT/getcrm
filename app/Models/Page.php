<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'pages';

    protected $with = [
        'blocks',
    ];

    protected $fillable = [
        'slug',
    ];

    public function seoData(): HasOne
    {
        return $this->hasOne(SeoData::class, 'page_id', 'id');
    }

    public function blocks(): HasMany
    {
        return $this->hasMany(PageBlock::class, 'page_id', 'id');
    }

    protected function block(string $name)
    {
        $block = $this->blocks->filter(static function (PageBlock $block) use ($name) {
            return $block->slug === $name;
        })->first();

        return $block && $block->isVisible()
            ? $block->content
            : null;
    }
}
