<?php

namespace App\Http\Sections\Dictionaries;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use App\Enums\UnitType;
use App\Models\Dictionaries\PeriodDiscount;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class PeriodDiscounts
 *
 * @property \App\Models\Dictionaries\PeriodDiscount $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class PeriodDiscounts extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Скидки от периода';

    /**
     * @var string
     */
    protected $alias = 'dictionaries/discounts/periods';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('dictionaries');

        $page->addPage(
            $this->makePage(700)->setIcon('fas fa-percent')
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
            AdminColumn::custom('От', static function (PeriodDiscount $item) {
                $period = trans_choice($item->from_unit->pluralization(), $item->from_period);
                return $item->from_period . ' ' . $period;
            }),
            AdminColumn::custom('До', static function (PeriodDiscount $item) {
                $period = trans_choice($item->to_unit->pluralization(), $item->to_period);
                return $item->to_period . ' ' . $period;
            }),
            AdminColumn::text('discount', 'Скидка, в %'),
            AdminColumn::order(),
        ];

        $display = AdminDisplay::table()
            ->paginate(100)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->oldest('order');
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
        $card = AdminForm::card();

        $period = PeriodDiscount::find($id);

        $form = AdminForm::elements([
            AdminFormElement::number('from_period', 'Сумма от')
                ->required(),
            AdminFormElement::select('from_unit', 'Единица измерения')
                ->setSortable(false)
                ->setOptions(UnitType::labels())
                ->required(),
            AdminFormElement::number('to_period', 'Сумма до')
                ->required(),
            AdminFormElement::select('to_unit', 'Единица измерения')
                ->setSortable(false)
                ->setOptions(UnitType::labels())
                ->required(),
            AdminFormElement::number('discount', 'Скидка, в %')
                ->setMin(1)
                ->setMax(100)
                ->setStep(1)
                ->required(),
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
}
