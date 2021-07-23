<?php

namespace App\Models;

use App\Models\Traits\ImageLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDocument extends Model
{
    use HasFactory,
        ImageLink,
        SoftDeletes;

    protected $fillable = [
        'user_id',
        'number',
        'date_end',
        'date_renew',
        'pdf',
        'xlsx',
    ];

    protected $casts = [
        'date_end' => 'date',
        'date_renew' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getPdfUrl(): string
    {
        return $this->makeUrl($this->pdf);
    }

    public function getXlsxUrl(): string
    {
        return $this->makeUrl($this->xlsx);
    }
}
