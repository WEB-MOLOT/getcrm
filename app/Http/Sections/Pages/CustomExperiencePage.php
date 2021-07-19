<?php

namespace App\Http\Sections\Pages;

use AdminNavigation;
use App\Models\Page;
use App\Models\Pages\CustomExperiencePage as ModelPage;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class CustomExperiencePage
 *
 * @property \App\Models\Pages\CustomExperiencePage $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class CustomExperiencePage extends Pages implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Что такое CX';

    /**
     * @var string
     */
    protected $alias = 'pages_ce';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('content');

        $page->addPage(
            $this->makePage(300)->setIcon('fab fa-intercom')
        );
    }

    protected function getPageModel(): ?Page
    {
        return ModelPage::firstOrFail();
    }
}
