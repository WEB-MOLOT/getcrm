<?php

namespace App\Models\Menus;

use App\Enums\MenuType;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use SleepingOwl\Admin\Traits\OrderableModel;

class TopMenu extends Menu
{
    use HasFactory,
        OrderableModel;

    protected static function booted()
    {
        static::addGlobalScope('ancient', function (Builder $builder) {
            $builder->where('type', '=', MenuType::TOP);
        });

        static::creating(function (Menu $menu) {
            $menu->type = MenuType::TOP;
        });
    }
}
