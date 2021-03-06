<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class Administrators
 *
 * @property \App\Models\Administrator $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Administrators extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Администраторы';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('settings');

        $page->addPage(
            $this->makePage(600)->setIcon('fas fa-user-lock')
        );
    }

    /**
     *
     * @return DisplayInterface
     */
    public function onDisplay(): DisplayInterface
    {
        $columns = [
            AdminColumn::text('id', '#')
                ->setWidth('50px')
                ->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('name', 'Имя'),
            AdminColumn::text('email', 'Логин/E-mail'),
            AdminColumn::datetime('last_login_at', 'Дата последнего входа')
                ->setFormat('d.m.Y H:i:s'),
            AdminColumn::datetime('created_at', 'Дата регистрации')
                ->setFormat('d.m.Y'),
        ];

        $display = AdminDisplay::table()
            ->paginate(40)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->latest('id');
        })->setNewEntryButtonText('Добавить администратора');

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     * @return FormInterface
     */
    public function onEdit(?int $id = null, array $payload = []): FormInterface
    {
        $card = AdminForm::card();

        $passwordElement = AdminFormElement::password('password', 'Пароль')
            ->hashWithBcrypt();

        if ($id === null) {
            $passwordElement->required()->addValidationRule('min:8');
        } else {
            $passwordElement->setHelpText('Оставьте поле пустым если не хотите менять пароль пользователю.');
        }

        $form = AdminForm::elements([
            AdminFormElement::text('name', 'ФИО')
                ->required(),
            AdminFormElement::text('email', 'E-mail')
                ->unique()
                ->addValidationRule('email')
                ->required(),
            $passwordElement,
        ]);

        $card->getButtons()->setButtons([
            'save_and_close' => (new SaveAndClose())->setText('Сохранить'),
            'cancel' => (new Cancel()),
        ]);

        return $card->addBody([$form]);
    }

    /**
     * @param array $payload
     * @return FormInterface
     * @throws \Exception
     */
    public function onCreate(array $payload = []): FormInterface
    {
        return $this->onEdit(null, $payload);
    }

    /**
     * @param Model $model
     * @return bool
     */
    public function isEditable(Model $model): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isCreatable(): bool
    {
        return true;
    }

    /**
     * @param Model $model
     * @return bool
     */
    public function isDeletable(Model $model): bool
    {
        return false;
    }

    /**
     * @return void
     */
    public function onRestore(int $id)
    {
        // remove if unused
    }
}
