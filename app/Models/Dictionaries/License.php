<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class License extends Model
{
    use HasFactory;

    protected $table = 'data_licenses';

    protected $fillable = [
        'service_id',
        'pre_id',
        'recommendation_id',
        'name',
        'metric',
        'metric_value',
        'metric_period',
        'price',
        'quantity',
        'support',
        'line',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function pre(): BelongsTo
    {
        return $this->belongsTo(License::class, 'pre_id');
    }

    public function recommendation(): BelongsTo
    {
        return $this->belongsTo(License::class, 'recommendation_id');
    }
}
