<?php

namespace App\Models\Pages;

use App\Editor\ListWithIcon;
use App\Enums\BlockType;
use App\Models\Page;
use App\Models\Traits\HasSeo;
use App\Models\Traits\ImageLink;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AboutPage
 * @package App\Models\Pages
 * @property ListWithIcon $principles_list
 */
class AboutPage extends Page
{
    use HasFactory,
        HasSeo,
        ImageLink,
        SoftDeletes;

    protected $appends = [
        'content',
        'image',
        'principles_title',
        'principles_list',
        'content2',
        'content3',
    ];

    protected array $objects = [
        'principles_list' => BlockType::LIST_WITH_ICON,
    ];

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'about');
        });
    }

    public function getImageUrl(): ?string
    {
        return $this->makeUrl($this->image);
    }
}
