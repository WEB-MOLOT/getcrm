<?php


namespace App\View\Composers;


use App\Models\Menu;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

abstract class AbstractMenuComposer
{
    abstract public function getMenu(): Collection;

    abstract public function getName(): string;

    public function compose(View $view): void
    {
        $menu = $this->getMenu()->map(static function (Menu $item) {

            $url = $item->page->slug === 'index' ? '' : $item->page->slug;

            return [
                'url' => url($url),
                'name' => $item->name,
            ];
        });

        $view->with($this->getName(), $menu);
    }
}
