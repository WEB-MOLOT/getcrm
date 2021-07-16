<?php


namespace App\View\Composers;


use App\Models\Menus\BurgerMenu;
use Illuminate\Database\Eloquent\Collection;

class BurgerMenuComposer extends AbstractMenuComposer
{
    public function getMenu(): Collection
    {
        return BurgerMenu::oldest('order')->get();
    }

    public function getName(): string
    {
        return 'burgerMenu';
    }
}
