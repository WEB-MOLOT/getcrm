<?php

namespace App\Models;

use App\Casts\SettingSectionCast;
use App\Casts\SettingTypeCast;
use App\Enums\SettingSection;
use App\Enums\SettingType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Setting
 * @property SettingType $type
 * @property SettingSection $section
 * @package App\Models
 */
class Setting extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'settings';

    protected $fillable = [
        'section',
        'name',
        'type',
        'value',
        'title',
    ];

    protected $casts = [
        'section' => SettingSectionCast::class,
        'type' => SettingTypeCast::class,
    ];
}
