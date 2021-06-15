<?php

namespace App\Models\Settings;

use App\Enums\SettingSection;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Builder;

class SiteSetting extends Setting
{
    protected static function booted()
    {
        static::addGlobalScope('section', function (Builder $builder) {
            $builder->where('section', '=', SettingSection::SITE);
        });
    }
}
