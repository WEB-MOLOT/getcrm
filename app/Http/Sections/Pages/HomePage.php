<?php

namespace App\Http\Sections\Pages;

use AdminNavigation;
use App\Models\Page;
use App\Models\Pages\HomePage as ModelPage;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class HomePage
 *
 * @property \App\Models\Pages\HomePage $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class HomePage extends Pages implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Главная';

    /**
     * @var string
     */
    protected $alias = 'pages_home';

    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('content');

        $page->addPage(
            $this->makePage(300)->setIcon('fas fa-home')
        );
    }

    protected function getPageModel(): ?Page
    {
        return ModelPage::firstOrFail();
    }
}
