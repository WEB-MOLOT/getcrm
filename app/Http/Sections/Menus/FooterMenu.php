<?php

namespace App\Http\Sections\Menus;

use AdminColumn;
use AdminDisplay;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class FooterMenu
 *
 * @property \App\Models\Menus\FooterMenu $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class FooterMenu extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Нижнее меню';

    /**
     * @var string
     */
    protected $alias = 'menus/footer';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()
            ->setPriority(1000)
            ->setIcon('fab fa-dev');
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
            AdminColumn::text('email', 'E-mail'),
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
        return false;
    }

    /**
     * @return bool
     */
    public function isCreatable(): bool
    {
        return false;
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
