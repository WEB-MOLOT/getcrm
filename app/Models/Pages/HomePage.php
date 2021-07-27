<?php

namespace App\Models\Pages;

use App\Models\Page;
use App\Models\Traits\HasSeo;
use App\Models\Traits\ImageLink;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HomePage
 * @package App\Models\Pages
 * @property-read string $block1_line1,
 * @property-read string $block1_line2
 * @property-read string $block1_line3
 * @property-read string $block1_line4
 * @property-read string $block1_btn
 * @property-read string $block2_title
 * @property-read string $block2_subtitle_solutions
 * @property-read string $block2_content_solutions
 * @property-read string $block2_subtitle_funcs
 * @property-read string $block2_content_funcs
 * @property-read string $block2_btn
 * @property-read string $block2_image
 * @property-read string $block3_title
 * @property-read string $block3_subtitle
 * @property-read string $block4_title
 * @property-read string $block4_subtitle
 * @property-read string $block5_title
 * @property-read string $block6_title
 * @property-read string $block6_line1
 * @property-read string $block6_line2
 * @property-read string $block6_content
 * @property-read string $block7_title
 * @property-read string $block7_image
 * @property-read string $block7_subtitle
 * @property-read string $block7_content
 * @property-read string $block7_btn
 * @property-read string $block7_link
 * @property-read string $block8_title
 * @property-read string $block8_link
 */
class HomePage extends Page
{
    use HasFactory,
        ImageLink,
        HasSeo,
        SoftDeletes;

    protected $appends = [
        'block1_line1',
        'block1_line2',
        'block1_line3',
        'block1_line4',
        'block1_btn',
        'block2_title',
        'block2_subtitle_solutions',
        'block2_content_solutions',
        'block2_subtitle_funcs',
        'block2_content_funcs',
        'block2_btn',
        'block2_image',
        'block3_title',
        'block3_subtitle',
        'block4_title',
        'block4_subtitle',
        'block5_title',
        'block6_title',
        'block6_line1',
        'block6_line2',
        'block6_content',
        'block7_title',
        'block7_image',
        'block7_subtitle',
        'block7_content',
        'block7_btn',
        'block7_link',
        'block8_title',
        'block8_link',
    ];

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'index');
        });
    }

    public function getBlock2ImageUrl(): ?string
    {
        return $this->makeUrl($this->block2_image);
    }

    public function getBlock7ImageUrl(): ?string
    {
        return $this->makeUrl($this->block7_image);
    }
}
