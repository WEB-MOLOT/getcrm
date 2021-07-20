<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceStandart extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
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
