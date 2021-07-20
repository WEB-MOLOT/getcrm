<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'title',
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
