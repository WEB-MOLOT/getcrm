<?php

namespace App\Http\Sections\Pages;

use AdminNavigation;
use App\Models\Page;
use App\Models\Pages\AboutPage as ModelPage;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class AboutPage
 *
 * @property \App\Models\Pages\AboutPage $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class AboutPage extends Pages implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'О компании';

    /**
     * @var string
     */
    protected $alias = 'pages_about';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('content');

        $page->addPage(
            $this->makePage(300)->setIcon('fas fa-eject')
        );
    }

    protected function getPageModel(): ?Page
    {
        return ModelPage::firstOrFail();
    }
}
