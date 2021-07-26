<?php

namespace App\Models;

use App\Models\Traits\ImageLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory,
        ImageLink,
        SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
    ];

    public function getLogoUrl(): ?string
    {
        return $this->makeUrl($this->logo);
    }
}
