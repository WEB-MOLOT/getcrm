<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionFilter extends Model
{
    use HasFactory;

    protected $table = 'data_solution_filters';

    protected $fillable = [
        'solution_id',
        'params',
    ];

    protected $casts = [
        'params' => 'array',
    ];

    protected $appends = [
        'params_as_string',
    ];

    public function getParamsAsStringAttribute(): string
    {
        return $this->attributes['params'] ?: '{}';
    }
}
