<?php

namespace App\Models\Dictionaries;

use App\Casts\FilterTypeCast;
use App\Enums\FilterType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Filter
 * @property FilterType $type
 * @package App\Models\Dictionaries
 */
class Filter extends Model
{
    use HasFactory;

    protected $table = 'data_filters';

    protected $fillable = [
        'type',
        'label',
        'key',
    ];

    protected $casts = [
        'type' => FilterTypeCast::class,
    ];
}
