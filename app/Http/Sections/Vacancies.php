<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use App\Models\Vacancy;
use Exception;
use HTML;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class Vacancies
 *
 * @property Vacancy $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Vacancies extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Вакансии';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('content');

        $page->addPage(
            $this->makePage(300)->setIcon('fab fa-buffer')
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
            AdminColumn::text('title', 'Заголовок'),
            AdminColumn::custom('HH', static function (Vacancy $item) {
                return HTML::tag(
                    'a',
                    '<i class="fas fa-external-link-alt"></i>',
                    [
                        'href' => $item->hh,
                    ],
                );
            }),
            AdminColumn::custom('Зарплата', static function (Vacancy $item) {
                $salary = optional($item->params)->salary;
                return $salary
                    ? $salary . '₽'
                    : '';
            }),
            AdminColumn::text('params->experience', 'Опыт работы'),
            AdminColumn::text('params->employment', 'Занятость'),
            AdminColumn::datetime('created_at', 'Добавлена')
                ->setWidth('200px')
                ->setFormat('d.m.Y'),

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
     *
     * @return FormInterface
     * @throws Exception
     */
    public function onEdit(): FormInterface
    {
        $card = AdminForm::card();

        $form = AdminForm::elements([
            AdminFormElement::text('title', 'Заголовок')
                ->required(),
            AdminFormElement::wysiwyg('content', 'Описание')
                ->required(),
            AdminFormElement::text('params->salary', 'Зарплата'),
            AdminFormElement::text('params->experience', 'Опыт работы'),
            AdminFormElement::text('params->employment', 'Занятость'),
            AdminFormElement::text('hh', 'Ссылка на HH'),
        ]);

        $tabs = AdminDisplay::tabbed();

        $tabs->appendTab($form, 'Вакансия', true);

        $card->getButtons()->setButtons([
            'save_and_close' => (new SaveAndClose())->setText('Сохранить'),
            'cancel' => (new Cancel()),
        ]);

        return $card->addBody([$tabs]);
    }

    /**
     * @return FormInterface
     * @throws Exception
     */
    public function onCreate(): FormInterface
    {
        return $this->onEdit();
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
     * @param int $id
     * @return void
     */
    public function onRestore(int $id): void
    {
        // remove if unused
    }
}
