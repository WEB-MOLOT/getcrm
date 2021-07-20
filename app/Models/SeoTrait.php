<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * Trait SeoTrait
 * @package App\Models
 * @property SeoData $seo
 */
trait SeoTrait
{
    public function seo(): MorphOne
    {
        return $this->morphOne(SeoData::class, 'seoable');
    }

    public function getSeoTitle(): ?string
    {
        $value = $this->seo->title;

        if (empty($value) && method_exists($this, 'getSeoDefaultTitle')) {
            $value = $this->getSeoDefaultTitle();
        }

        return $value;
    }

    public function getSeoKeywords(): ?string
    {
        $value = $this->seo->keywords;

        if (empty($value) && method_exists($this, 'getSeoDefaultKeywords')) {
            $value = $this->getSeoDefaultKeywords();
        }

        return $value;
    }

    public function getSeoDescription(): ?string
    {
        $value = $this->seo->description;

        if (empty($value) && method_exists($this, 'getSeoDefaultDescription')) {
            $value = $this->getSeoDefaultDescription();
        }

        return $value;
    }

    public function isDisabledIndex(): bool
    {
        return $this->seo->disable_index;
    }
}
