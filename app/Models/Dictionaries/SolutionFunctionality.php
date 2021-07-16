<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionFunctionality extends Model
{
    protected $table = 'data_solution_functionalities';

    use HasFactory;

    protected $fillable = [
        'solution_id',
        'name',
        'order',
    ];
}
