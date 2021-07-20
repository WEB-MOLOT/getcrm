<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class Reviews
 *
 * @property \App\Models\Review $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Reviews extends Section
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Отзывы';

    /**
     * @var string
     */
    protected $alias = 'reviews';

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay(array $payload = []): DisplayInterface
    {
        $reviewableId = $payload['id'] ?? null;
        $reviewableType = $payload['type'] ?? null;

        $columns = [
            AdminColumn::text('id', '#')
                ->setWidth('50px')
                ->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('customer.company.name', 'Компания'),
            AdminColumn::text('customer.name', 'Пользователь'),
            AdminColumn::text('text', 'Отзыв'),
            AdminColumn::text('score', 'Ср. оценка'),
            AdminColumn::text('score_development', 'Качество разработки'),
            AdminColumn::text('score_usability', 'Юзабилити'),
            AdminColumn::text('score_team', 'Квалификация команды'),
            AdminColumn::text('score_budget', 'Бюджет'),
            AdminColumn::text('score_deadlines', 'Сроки'),
        ];

        $display = AdminDisplay::table()
            ->with([
                'customer',
                'customer.company'
            ])
            ->paginate(100)
            ->setColumns($columns)
            ->setNewEntryButtonText('Добавить отзыв')
            ->setParameter('reviewable_id', $reviewableId)
            ->setParameter('reviewable_type', $reviewableType)
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) use ($reviewableId, $reviewableType) {
            $query->latest('id')
                ->where('reviewable_type', '=', $reviewableType)
                ->where('reviewable_id', '=', $reviewableId);
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
        $card = AdminForm::card();

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
        return true;
    }
}
