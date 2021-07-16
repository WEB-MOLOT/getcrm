<?php

namespace App\Http\Sections\Menus;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Models\Page;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class BurgerMenu
 *
 * @property \App\Models\Menus\BurgerMenu $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class DefaultMenu extends Section
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var string
     */
    protected $alias = 'menus';

    protected int $type;

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
            AdminColumn::text('name', 'Текст ссылки'),
            AdminColumn::text('page.name', 'Страница'),
            AdminColumn::order(),
        ];

        $display = AdminDisplay::table()
            ->paginate(100)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->oldest('order')->oldest('id');
        });

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     * @return FormInterface
     * @throws \SleepingOwl\Admin\Exceptions\Form\Element\SelectException
     */
    public function onEdit(?int $id = null, array $payload = []): FormInterface
    {
        $card = AdminForm::card();

        $form = AdminForm::elements([
            AdminFormElement::select('page_id', 'Страница')->required()
                ->setModelForOptions(Page::class, 'name'),
            AdminFormElement::text('name', 'Текст ссылки')->required(),
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
     * @throws Exception
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
        return true;
    }

    /**
     * @return void
     */
    public function onRestore(int $id)
    {
        // remove if unused
    }
}
