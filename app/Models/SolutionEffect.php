<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionEffect extends Model
{
    use HasFactory;

    protected $fillable = [
        'solution_id',
        'line1',
        'line2',
        'fire',
    ];
}
