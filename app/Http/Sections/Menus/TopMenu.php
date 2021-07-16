<?php

namespace App\Http\Sections\Menus;

use AdminNavigation;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class TopMenu
 *
 * @property \App\Models\Menus\TopMenu $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class TopMenu extends DefaultMenu implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Верхнее меню';

    /**
     * @var string
     */
    protected $alias = 'menu_top';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('settings');

        $page->addPage(
            $this->makePage(300)->setIcon('fas fa-desktop')
        );
    }
}
