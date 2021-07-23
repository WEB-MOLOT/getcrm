<?php

namespace App\Models;

use App\Models\Traits\ImageLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionDescription extends Model
{
    use ImageLink,
        HasFactory;

    protected $fillable = [
        'solution_id',
        'description',
        'icon',
    ];

    public function getIconUrl(): ?string
    {
        return $this->makeUrl($this->icon);
    }
}
