<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use SleepingOwl\Admin\Traits\OrderableModel;

class FilterValue extends Model
{
    use HasFactory,
        OrderableModel,
        SoftDeletes;

    protected $table = 'data_filter_values';

    protected $fillable = [
        'filter_id',
        'name',
        'order',
    ];

    public function filter(): BelongsTo
    {
        return $this->belongsTo(Filter::class);
    }
}
