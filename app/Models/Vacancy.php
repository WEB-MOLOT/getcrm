<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancy extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'hh',
        'params',
    ];

    protected $appends = [
        'salary',
        'experience',
        'employment',
    ];

    protected $casts = [
        'params' => 'object',
    ];

    public function getSalaryAttribute(): ?string
    {
        return optional($this->params)->salary;
    }

    public function getExperienceAttribute(): ?string
    {
        return optional($this->params)->experience;
    }

    public function getEmploymentAttribute(): ?string
    {
        return optional($this->params)->employment;
    }
}
