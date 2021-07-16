<?php

namespace App\Http\Sections\Settings;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use App\Models\Settings\SiteSetting;
use Illuminate\Database\Eloquent\Builder;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class SiteSettings
 *
 * @property SiteSetting $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class SiteSettings extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Настройки сайта';

    /**
     * @var string
     */
    protected $alias = 'settings_site';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('settings');

        $page->addPage(
            $this->makePage(150)->setIcon('fas fa-cog')
        );
    }

    /**
     *
     * @return DisplayInterface
     */
    public function onDisplay(): DisplayInterface
    {
        $columns = [
            AdminColumn::text('title', 'Параметр'),
            AdminColumn::text('value', 'Значение'),
        ];

        $display = AdminDisplay::table()
            ->paginate(200)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->oldest('title');
        });

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     * @return FormInterface
     */
    public function onEdit(int $id = null, array $payload = []): FormInterface
    {
        /** @var SiteSetting $setting */
        $setting = SiteSetting::query()->find($id);

        $method = $setting->type->value();

        $form = AdminForm::card()->addBody([
            AdminFormElement::$method('value', $setting->title),
        ]);

        $form->getButtons()->setButtons([
            'save_and_close' => (new SaveAndClose())->setText('Сохранить'),
        ]);

        return $form;
    }
}
