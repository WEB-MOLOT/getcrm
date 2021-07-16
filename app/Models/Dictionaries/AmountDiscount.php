<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Traits\OrderableModel;

class AmountDiscount extends Model
{
    use HasFactory,
        OrderableModel;

    protected $table = 'data_amount_discounts';

    protected $fillable = [
        'from_amount',
        'to_amount',
        'discount',
        'order',
    ];
}
