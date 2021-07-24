<?php

namespace App\Models;

use App\Editor\ListWithIcon;
use App\Enums\BlockType;
use App\Models\Traits\HasSeo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory,
        HasSeo,
        SoftDeletes;

    protected $table = 'pages';

    protected $with = [
        'blocks',
    ];

    protected $fillable = [
        'slug',
        'name',
    ];

    protected array $objects = [];

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

    /**
     * Автоматизация создания геттеров для перехвата работы с блоками
     *
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        if (in_array($key, $this->appends)) {
            $value = $this->block($key);

            if (array_key_exists($key, $this->objects)) {
                switch ($this->objects[$key]) {
                    case BlockType::LIST_WITH_ICON:
                        return (new ListWithIcon($value))->getItems();
                }
            }

            return $value;
        }

        return parent::__get($key);
    }

    /**
     * Автоматизация создания сеттеров для перехвата работы с блоками
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function __set($key, $value)
    {
        if (in_array($key, $this->appends)) {
            $this->saveBlock($key, $value);
        } else {
            parent::__set($key, $value);
        }
    }
}
