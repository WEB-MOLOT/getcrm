<?php

namespace App\Http\Sections\Menus;

use AdminNavigation;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class FooterMenu
 *
 * @property \App\Models\Menus\FooterMenu $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class FooterMenu extends DefaultMenu implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Нижнее меню';

    /**
     * @var string
     */
    protected $alias = 'menus/footer';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('settings');

        $page->addPage(
            $this->makePage(400)->setIcon('fas fa-shoe-prints')
        );
    }
}
