<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqItem extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'faqable_type',
        'faqable_id',
        'question',
        'answer',
    ];

    public function faqable(): MorphTo
    {
        return $this->morphTo();
    }
}
