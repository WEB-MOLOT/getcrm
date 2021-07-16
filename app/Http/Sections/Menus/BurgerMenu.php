<?php

namespace App\Http\Sections\Menus;

use AdminNavigation;
use App\Enums\MenuType;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class BurgerMenu
 *
 * @property \App\Models\Menus\BurgerMenu $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class BurgerMenu extends DefaultMenu implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Бургер меню';

    /**
     * @var string
     */
    protected $alias = 'menu_burger';

    protected int $type = MenuType::BURGER;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('settings');

        $page->addPage(
            $this->makePage(500)->setIcon('fas fa-hamburger')
        );
    }


}
