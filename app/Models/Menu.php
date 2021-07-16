<?php

namespace App\Models;

use App\Casts\MenuTypeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use SleepingOwl\Admin\Traits\OrderableModel;

class Menu extends Model
{
    use HasFactory,
        OrderableModel;

    protected $table = 'menus';

    protected $fillable = [
        'type',
        'page_id',
        'name',
        'order',
    ];

    protected $casts = [
        'type' => MenuTypeCast::class,
    ];

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
}
