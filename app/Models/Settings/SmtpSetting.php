<?php

namespace App\Models\Settings;

use App\Enums\SettingSection;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class SmtpSetting extends Setting
{
    use SoftDeletes;

    protected static function booted()
    {
        static::addGlobalScope('section', static function (Builder $builder) {
            $builder->where('section', '=', SettingSection::SMTP);
        });

        static::creating(static function (SmtpSetting $setting) {
            $setting->section = SettingSection::SMTP;
        });
    }
}
