<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorySolution extends Model
{
    use HasFactory;

    protected $fillable = [
        'line',
        'success_story_id',
    ];
}
