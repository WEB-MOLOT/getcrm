<?php

namespace App\Models\Pages;

use App\Models\Page;
use App\Models\SeoTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutPage extends Page
{
    use HasFactory,
        SeoTrait,
        SoftDeletes;

    protected $appends = [
        'content',
        'xxx',
        'xxx1',
        'xxx2',
        'xxx3',
        'xxx4',
    ];

    protected static function booted()
    {
        static::addGlobalScope('page', static function (Builder $builder) {
            $builder->where('slug', '=', 'about');
        });
    }

    public function getContentAttribute()
    {
        return $this->block('content');
    }

    public function getXxxAttribute()
    {
        return $this->block('xxx');
    }

    public function getXxx1Attribute()
    {
        return $this->block('xxx1');
    }

    public function getXxx2Attribute()
    {
        return $this->block('xxx2');
    }

    public function getXxx3Attribute()
    {
        return $this->block('xxx3');
    }

    public function getXxx4Attribute()
    {
        return $this->block('xxx4');
    }

    public function setContentAttribute($value)
    {
        $this->saveBlock('content', $value);
    }

    public function setXxxAttribute($value)
    {
        $this->saveBlock('xxx', $value);
    }

    public function setXxx1Attribute($value)
    {
        $this->saveBlock('xxx1', $value);
    }

    public function setXxx2Attribute($value)
    {
        $this->saveBlock('xxx2', $value);
    }

    public function setXxx3Attribute($value)
    {
        $this->saveBlock('xxx3', $value);
    }

    public function setXxx4Attribute($value)
    {
        $this->saveBlock('xxx4', $value);
    }
}
