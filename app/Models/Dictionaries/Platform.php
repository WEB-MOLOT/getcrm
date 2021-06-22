<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Platform extends Model
{
    use HasFactory;

    protected $table = 'data_platforms';

    protected $fillable = [
        'name',
        'description',
    ];

    public function solutions(): BelongsToMany
    {
        return $this->belongsToMany(Solution::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }
}
