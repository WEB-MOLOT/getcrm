<?php

namespace App\Models\Menus;

use App\Enums\MenuType;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use SleepingOwl\Admin\Traits\OrderableModel;

class BurgerMenu extends Menu
{
    use HasFactory,
        OrderableModel,
        SoftDeletes;

    protected static function booted()
    {
        static::addGlobalScope('ancient', static function (Builder $builder) {
            $builder->where('type', '=', MenuType::BURGER);
        });

        static::creating(static function (Menu $menu) {
            $menu->type = MenuType::BURGER;
        });
    }
}
