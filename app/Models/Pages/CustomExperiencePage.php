<?php

namespace App\Models\Pages;

use App\Models\Page;
use App\Models\SeoTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomExperiencePage extends Page
{
    use HasFactory,
        SeoTrait,
        SoftDeletes;

    protected $appends = [
        'content',
        'title1',
        'content1',
        'title2',
        'content2',
        'title3',
        'content3',
        'title4',
        'content4',
    ];

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'customer');
        });
    }

    public function getContentAttribute()
    {
        return $this->block('content');
    }

    public function setContentAttribute($value)
    {
        $this->saveBlock('content', $value);
    }

    public function getTitle1Attribute()
    {
        return $this->block('title1');
    }

    public function setTitle1Attribute($value)
    {
        $this->saveBlock('title1', $value);
    }

    public function getContent1Attribute()
    {
        return $this->block('content1');
    }

    public function setContent1Attribute($value)
    {
        $this->saveBlock('content1', $value);
    }


    public function getTitle2Attribute()
    {
        return $this->block('title2');
    }

    public function setTitle2Attribute($value)
    {
        $this->saveBlock('title2', $value);
    }

    public function getContent2Attribute()
    {
        return $this->block('content2');
    }

    public function setContent2Attribute($value)
    {
        $this->saveBlock('content2', $value);
    }


    public function getTitle3Attribute()
    {
        return $this->block('title3');
    }

    public function setTitle3Attribute($value)
    {
        $this->saveBlock('title3', $value);
    }

    public function getContent3Attribute()
    {
        return $this->block('content3');
    }

    public function setContent3Attribute($value)
    {
        $this->saveBlock('content3', $value);
    }


    public function getTitle4Attribute()
    {
        return $this->block('title4');
    }

    public function setTitle4Attribute($value)
    {
        $this->saveBlock('title4', $value);
    }

    public function getContent4Attribute()
    {
        return $this->block('content4');
    }

    public function setContent4Attribute($value)
    {
        $this->saveBlock('content4', $value);
    }
}
