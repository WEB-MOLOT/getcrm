<?php

namespace App\Http\Sections\Dictionaries;

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
use SleepingOwl\Admin\Section;

/**
 * Class Solutions
 *
 * @property \App\Models\Dictionaries\Solution $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Solutions extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Решения';

    /**
     * @var string
     */
    protected $alias = 'dictionaries/solutions';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('dictionaries');

        $page->addPage(
            $this->makePage(200)->setIcon('fas fa-house-user')
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
            AdminColumn::text('name', 'Название'),
        ];

        $display = AdminDisplay::table()
            ->paginate(40)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->latest('id');
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
        return AdminForm::card()->addBody([
            AdminFormElement::text('name', 'Название')
                ->required(),
            AdminFormElement::textarea('description', 'Описание')
                ->required(),
        ]);
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
