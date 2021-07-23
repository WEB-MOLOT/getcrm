<?php

namespace App\Models;

use App\Models\Traits\ImageLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDescription extends Model
{
    use ImageLink,
        HasFactory;

    protected $fillable = [
        'service_id',
        'title',
        'description',
        'icon',
    ];

    public function getIconUrl(): ?string
    {
        return $this->makeUrl($this->icon);
    }
}
