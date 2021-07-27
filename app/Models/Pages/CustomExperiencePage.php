<?php

namespace App\Models\Pages;

use App\Models\Page;
use App\Models\Traits\HasSeo;
use App\Models\Traits\ImageLink;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CustomExperiencePage
 * @package App\Models\Pages
 * @property-read string $content
 * @property-read string block1_title
 * @property-read string block1_content
 * @property-read string block2_title
 * @property-read string block2_content
 * @property-read string block3_title
 * @property-read string block3_content
 * @property-read string block4_title
 * @property-read string block4_content_left
 * @property-read string block4_content_right
 * @property-read string block5_title
 * @property-read string block5_content
 * @property-read string block6_content
 */
class CustomExperiencePage extends Page
{
    use HasFactory,
        ImageLink,
        HasSeo,
        SoftDeletes;

    protected $appends = [
        'content',
        'block1_title',
        'block1_content',
        'block1_image',
        'block2_title',
        'block2_content',
        'block2_image',
        'block3_title',
        'block3_content',
        'block3_image',
        'block4_title',
        'block4_image_left',
        'block4_content_left',
        'block4_content_right',
        'block4_image_right',
        'block5_title',
        'block5_content',
        'block5_image',
        'block6_content',
    ];

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'customer');
        });
    }

    public function getBlock1ImageUrl(): ?string
    {
        return $this->makeUrl($this->block1_image);
    }

    public function getBlock2ImageUrl(): ?string
    {
        return $this->makeUrl($this->block2_image);
    }

    public function getBlock3ImageUrl(): ?string
    {
        return $this->makeUrl($this->block3_image);
    }

    public function getBlock4LeftImageUrl(): ?string
    {
        return $this->makeUrl($this->block4_image_left);
    }

    public function getBlock4RightImageUrl(): ?string
    {
        return $this->makeUrl($this->block4_image_right);
    }

    public function getBlock5ImageUrl(): ?string
    {
        return $this->makeUrl($this->block5_image);
    }
}
