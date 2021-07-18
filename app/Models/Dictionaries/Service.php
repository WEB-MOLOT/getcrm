<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    protected $table = 'data_services';

    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'name',
        'description',
    ];

    public function solutions(): BelongsToMany
    {
        return $this->belongsToMany(Solution::class);
    }

    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class);
    }


}
