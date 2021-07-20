<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solution extends Model
{
    protected $table = 'data_solutions';

    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'name',
        'description',
    ];

    public function functionalities(): HasMany
    {
        return $this->hasMany(SolutionFunctionality::class);
    }

    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }

    public function filters(): HasMany
    {
        return $this->hasMany(SolutionFilter::class);
    }
}
