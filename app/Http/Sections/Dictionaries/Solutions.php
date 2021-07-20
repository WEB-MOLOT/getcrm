<?php

namespace App\Http\Sections\Dictionaries;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use App\Models\Dictionaries\Filter;
use App\Models\Dictionaries\FilterValue;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
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
    protected $alias = 'dictionaries_solutions';

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
     * @throws \SleepingOwl\Admin\Exceptions\Form\Element\SelectException
     */
    public function onEdit(?int $id = null, array $payload = []): FormInterface
    {
        $card = AdminForm::card();

        $form = AdminForm::elements([
            AdminFormElement::text('name', 'Название')
                ->required(),
            AdminFormElement::textarea('description', 'Описание')
                ->required(),
        ]);

        $tabs = AdminDisplay::tabbed();

        $tabs->appendTab($form, 'Решение', true);

        if ($id) {
            // Функционал
            $functionalities = AdminForm::elements([
                '<p>После изменения функционала надо обязательно сохранить изменения в базу (кнопка Сохранить внизу формы).</p>',
                AdminFormElement::hasMany('functionalities', [
                    AdminFormElement::text('name', 'Название функционала')
                ]),
            ]);
            $tabs->appendTab($functionalities, 'Функционал', false);

            // Связь с фильтрами
            $filters = Filter::query()->oldest('order')->get();
            $filterValues = FilterValue::all()->groupBy('filter_id');

            $filtersElements = [
                '<h4 class="subform_header">Фильтры</h4>',
            ];
            foreach ($filters as $filter) {
                /** @var Collection $currentFilterValues */
                $currentFilterValues = $filterValues->get($filter->id);
                $options = $currentFilterValues->map(static function (FilterValue $item) {
                    return [
                        'id' => $item->id,
                        'value' => $item->name,
                    ];
                })->pluck('value', 'id')->toArray();

                $filtersElements[] = AdminFormElement::select('params->' . $filter->id, $filter->name)
                    ->setOptions($options);
            }

            $filtersForms = AdminForm::elements([
                '<p>После изменения функционала надо обязательно сохранить изменения в базу (кнопка Сохранить внизу формы).</p>',
                AdminFormElement::hasMany('filters', $filtersElements),
            ]);
            $tabs->appendTab($filtersForms, 'Варианты фильтров', false);
        }

        $card->getButtons()->setButtons([
            'save_and_close' => (new SaveAndClose())->setText('Сохранить'),
            'cancel' => (new Cancel()),
        ]);

        return $card->addBody([$tabs]);
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

    /**
     * @return void
     */
    public function onRestore(int $id)
    {
        // remove if unused
    }
}
