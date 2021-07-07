<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    protected $table = 'pages';

    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'slug',
    ];

    public function seoData(): HasOne
    {
        return $this->hasOne(SeoData::class);
    }
}
