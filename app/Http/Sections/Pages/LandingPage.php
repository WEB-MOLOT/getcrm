<?php

namespace App\Http\Sections\Pages;

use AdminNavigation;
use App\Models\Page;
use App\Models\Pages\LandingPage as ModelPage;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class LandingPage
 *
 * @property \App\Models\Pages\LandingPage $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class LandingPage extends Pages implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'ДИМАРКЭ';

    /**
     * @var string
     */
    protected $alias = 'pages_dimarke';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('content');

        $page->addPage(
            $this->makePage(300)->setIcon('fas fa-plane-arrival')
        );
    }

    protected function getPageModel(): ?Page
    {
        return ModelPage::firstOrFail();
    }
}
