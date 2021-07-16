<?php

namespace App\Http\Sections\Dictionaries;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use App\Models\Dictionaries\Service;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class Licenses
 *
 * @property \App\Models\Dictionaries\License $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Licenses extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Лицензии';

    /**
     * @var string
     */
    protected $alias = 'dictionaries/licenses';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('dictionaries');

        $page->addPage(
            $this->makePage(500)->setIcon('fas fa-passport')
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

            AdminColumn::text('name', 'Наименование'),
            AdminColumn::text('service.name', 'Сервис'),
            AdminColumn::text('metric', 'Метрика'),
            AdminColumn::text('metric_value', 'Значение метрики'),
            AdminColumn::text('metric_period', 'Срок метрики, мес.'),
            AdminColumn::text('price', 'Цена ($), в год'),
            AdminColumn::text('quantity', 'Кол-во'),
            AdminColumn::text('support', 'Техподдержка'),
            AdminColumn::text('line', 'Линия бизнеса'),
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
            AdminFormElement::text('name', 'Название')->required(),
            AdminFormElement::select('service_id', 'Сервис')->required()
                ->setModelForOptions(Service::class, 'name'),
            AdminFormElement::text('metric', 'Метрика')->required(),
            AdminFormElement::text('metric_value', 'Значение метрики')->required(),
            AdminFormElement::number('metric_period', 'Срок метрики, мес.')->required(),
            AdminFormElement::number('price', 'Цена ($), в год')->required(),
            AdminFormElement::number('quantity', 'Кол-во')->required(),
            AdminFormElement::text('support', 'Техподдержка')->required(),
            AdminFormElement::text('line', 'Линия бизнеса')->required(),
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
