<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeoData extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'page_id',
        'title',
        'keywords',
        'description',
        'disable_index',
    ];

    protected $casts = [
        'disable_index' => 'boolean',
    ];
}
