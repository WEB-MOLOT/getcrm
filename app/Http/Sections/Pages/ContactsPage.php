<?php

namespace App\Http\Sections\Pages;

use AdminNavigation;
use App\Models\Page;
use App\Models\Pages\ContactsPage as ModelPage;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class ContactsPage
 *
 * @property \App\Models\Pages\ContactsPage $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class ContactsPage extends Pages implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Контакты';

    /**
     * @var string
     */
    protected $alias = 'pages_contacts';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('content');

        $page->addPage(
            $this->makePage(300)->setIcon('fas fa-address-card')
        );
    }

    protected function getPageModel(): ?Page
    {
        return ModelPage::firstOrFail();
    }
}
