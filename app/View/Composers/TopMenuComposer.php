<?php


namespace App\View\Composers;


use App\Models\Menus\TopMenu;
use Illuminate\Database\Eloquent\Collection;

class TopMenuComposer extends AbstractMenuComposer
{
    public function getMenu(): Collection
    {
        return TopMenu::oldest('order')->get();
    }

    public function getName(): string
    {
        return 'topMenu';
    }
}
