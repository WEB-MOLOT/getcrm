<?php

namespace App\Models\Dictionaries;

use App\Casts\FilterTypeCast;
use App\Enums\FilterType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Filter
 * @package App\Models\Dictionaries
 */
class Filter extends Model
{
    use HasFactory;

    protected $table = 'data_filters';

    protected $fillable = [
        'name',
        'order',
    ];

    public function values(): HasMany
    {
        return $this->hasMany(FilterValue::class, 'filter_id');
    }
}
