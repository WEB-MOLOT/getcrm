<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Solution extends Model
{
    protected $table = 'data_solutions';

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }
}
