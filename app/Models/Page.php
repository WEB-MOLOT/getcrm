<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory,
        SeoTrait,
        SoftDeletes;

    protected $table = 'pages';

    protected $with = [
        'blocks',
    ];

    protected $fillable = [
        'slug',
        'name',
    ];

    public function seo(): MorphOne
    {
        return $this->morphOne(SeoData::class, 'seoable');
    }

    public function name(): string
    {
        return $this->name;
    }

    protected function getSeoDefaultTitle(): string
    {
        return $this->name();
    }

    public function blocks(): HasMany
    {
        return $this->hasMany(PageBlock::class, 'page_id', 'id');
    }

    protected function getBlockBySlug(string $name): ?PageBlock
    {
        return $this->blocks->filter(static function (PageBlock $block) use ($name) {
            return $block->slug === $name;
        })->first();
    }

    protected function saveBlock(string $name, mixed $value): void
    {
        $block = $this->getBlockBySlug($name);

        $block->update([
            'content' => $value,
        ]);
    }

    protected function block(string $name)
    {
        $block = $this->getBlockBySlug($name);

        return $block
            ? $block->content
            : null;
    }
}
