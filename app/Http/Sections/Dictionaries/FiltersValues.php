<?php

namespace App\Http\Sections\Dictionaries;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Models\Dictionaries\Filter;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class FiltersValues
 *
 * @property \App\Models\Dictionaries\FilterValue $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class FiltersValues extends Section
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay(array $payload = []): DisplayInterface
    {
        $filterId = $payload['filter_id'] ?? null;

        $columns = [
            AdminColumn::text('id', '#')
                ->setWidth('50px')
                ->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('name', 'Значение'),
            AdminColumn::order(),
        ];

        $display = AdminDisplay::table()
            ->paginate(100)
            ->setColumns($columns)
            ->setNewEntryButtonText('Добавить значение фильтра')
            ->setParameter('filter_id', $filterId)
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) use ($filterId) {
            $query->oldest('order')->where('filter_id', '=', $filterId);
        });

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     *
     * @return FormInterface
     * @throws Exception
     */
    public function onEdit(?int $id = null, array $payload = []): FormInterface
    {
        $filterId = request()->get('filter_id');

        $card = AdminForm::card()->addBody([
            AdminFormElement::select('filter_id', 'Фильтр')
                ->setModelForOptions(Filter::class, 'name')
                ->setLoadOptionsQueryPreparer(static function ($element, Builder $query) use ($filterId) {
                    return $query->where('id', '=', $filterId);
                })
                ->setDefaultValue($filterId)
                ->required(),
            AdminFormElement::text('name', 'Значение')
                ->required(),
        ]);

        $card->getButtons()->setButtons([
            'save_and_close' => (new SaveAndClose())->setText('Сохранить'),
            'cancel' => (new Cancel()),
        ]);

        return $card;
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
    public function isDeletable(Model $model): bool
    {
        return false;
    }
}
