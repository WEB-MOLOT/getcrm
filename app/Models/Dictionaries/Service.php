<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    protected $table = 'data_services';

    use HasFactory;

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
