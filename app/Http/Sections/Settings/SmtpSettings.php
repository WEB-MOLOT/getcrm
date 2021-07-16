<?php

namespace App\Http\Sections\Settings;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use App\Models\Settings\SmtpSetting;
use Illuminate\Database\Eloquent\Builder;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class SmtpSettings
 *
 * @property \App\Models\Settings\SmtpSetting $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class SmtpSettings extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Настройки SMTP';

    /**
     * @var string
     */
    protected $alias = 'settings_smtp';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('settings');

        $page->addPage(
            $this->makePage(200)->setIcon('fas fa-at')
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
    public function onEdit(?int $id = null, array $payload = []): FormInterface
    {
        /** @var SmtpSetting $setting */
        $setting = SmtpSetting::query()->find($id);

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
