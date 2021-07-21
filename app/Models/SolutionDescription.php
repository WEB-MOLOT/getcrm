<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionDescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'solution_id',
        'description',
        'icon',
    ];

    public function getIconUrl(): ?string
    {
        if ($this->icon) {
            return url($this->icon);
        }

        return null;
    }
}
