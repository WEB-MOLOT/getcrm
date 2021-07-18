<?php

namespace App\Models\Dictionaries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SolutionFunctionality extends Model
{
    protected $table = 'data_solution_functionalities';

    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'solution_id',
        'name',
        'order',
    ];
}
