<?php

namespace App\Models\Dictionaries;

use App\Casts\UnitTypeCast;
use App\Enums\UnitType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Traits\OrderableModel;

/**
 * Class PeriodDiscount
 * @package App\Models\Dictionaries
 * @property UnitType $from_unit
 * @property UnitType $to_unit
 */
class PeriodDiscount extends Model
{
    use HasFactory,
        OrderableModel;

    protected $table = 'data_period_discounts';

    protected $fillable = [
        'from_period',
        'from_unit',
        'to_period',
        'to_unit',
        'discount',
        'order',
    ];

    protected $casts = [
        'from_unit' => UnitTypeCast::class,
        'to_unit' => UnitTypeCast::class,
    ];
}
