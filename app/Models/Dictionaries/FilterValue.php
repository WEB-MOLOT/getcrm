<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FilterValue extends Model
{
    use HasFactory;

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
