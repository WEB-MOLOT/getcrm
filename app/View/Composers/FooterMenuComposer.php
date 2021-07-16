<?php


namespace App\View\Composers;


use App\Models\Menus\FooterMenu;
use Illuminate\Database\Eloquent\Collection;

class FooterMenuComposer extends AbstractMenuComposer
{
    public function getMenu(): Collection
    {
        return FooterMenu::oldest('order')->get();
    }

    public function getName(): string
    {
        return 'footerMenu';
    }
}
