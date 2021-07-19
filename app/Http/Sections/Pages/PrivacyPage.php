<?php

namespace App\Http\Sections\Pages;

use AdminNavigation;
use App\Models\Page;
use App\Models\Pages\PrivacyPage as ModelPage;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class ContactsPage
 *
 * @property \App\Models\Pages\PrivacyPage $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class PrivacyPage extends Pages implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Политика конфиденциальности';

    /**
     * @var string
     */
    protected $alias = 'pages_privacy';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('content');

        $page->addPage(
            $this->makePage(900)->setIcon('fas fa-user-secret')
        );
    }

    protected function getPageModel(): ?Page
    {
        return ModelPage::firstOrFail();
    }
}
