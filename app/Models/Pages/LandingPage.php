<?php

namespace App\Models\Pages;

use App\Models\Page;
use App\Models\Traits\HasSeo;
use App\Models\Traits\ImageLink;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LandingPage
 * @package App\Models\Pages
 * @property-read string $block1_subtitle
 * @property-read string $block1_content
 * @property-read string $block1_btn
 * @property-read string $block1_help
 * @property-read string $block1_video
 * @property-read string $block2_title
 * @property-read string $block3_title
 * @property-read string $block3_content
 * @property-read string $block3_btn
 * @property-read string $block4_title
 * @property-read string $block5_title
 * @property-read string $block5_subtitle
 * @property-read string $block5_content
 * @property-read string $block5_btn
 * @property-read string $block5_image
 */
class LandingPage extends Page
{
    use HasFactory,
        HasSeo,
        ImageLink,
        SoftDeletes;

    protected $appends = [
        'block1_subtitle',
        'block1_content',
        'block1_btn',
        'block1_help',
        'block1_video',
        'block2_title',
        'block3_title',
        'block3_content',
        'block3_btn',
        'block4_title',
        'block5_title',
        'block5_subtitle',
        'block5_content',
        'block5_btn',
        'block5_image',
    ];

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'dimarke');
        });
    }

    public function getBlock1VideoUrl(): ?string
    {
        return $this->makeUrl($this->block1_video);
    }

    public function getBlock5ImageUrl(): ?string
    {
        return $this->makeUrl($this->block5_image);
    }
}
