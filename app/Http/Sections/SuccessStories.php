<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class SuccessStories
 *
 * @property \App\Models\SuccessStory $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class SuccessStories extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Истории успеха';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()
            ->setPriority(700)
            ->setIcon('fas fa-thumbs-up');
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

            AdminColumn::image('logo2'),
            AdminColumn::image('image'),
            AdminColumn::text('title', 'Заголовок'),
            AdminColumn::datetime('created_at', 'Добавлена')
                ->setWidth('200px')
                ->setFormat('d.m.Y H:i:s'),
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
    public function onEdit(?int $id = null, array $payload): FormInterface
    {
        $card = AdminForm::card();

        $tabs = AdminDisplay::tabbed();

        // Основная форма
        $form = AdminForm::elements([
            AdminFormElement::text('title', 'Заголовок')
                ->required(),
            AdminFormElement::image('image', 'Изображение')
                ->setUploadPath(static function (UploadedFile $file) {
                    return 'storage/stories/images';
                })
                ->required(),
            AdminFormElement::image('logo', 'Логотип для страницы списка')
                ->setUploadPath(static function (UploadedFile $file) {
                    return 'storage/stories/logos';
                })
                ->required(),
            AdminFormElement::image('logo2', 'Логотип для страницы истории')
                ->setUploadPath(static function (UploadedFile $file) {
                    return 'storage/stories/logos';
                })
                ->required(),
        ]);

        $tabs->appendTab($form, 'История успеха', true);

        // Краткое описание компании
        $formShorts = AdminForm::elements([
            AdminFormElement::hasMany('shorts', [
                AdminFormElement::text('line', 'Пункт краткого описания компании')
                    ->required(),
            ]),
        ]);

        $tabs->appendTab($formShorts, 'Краткое описание компании', false);

        // Проблематика и вызовы
        $formShorts = AdminForm::elements([
            AdminFormElement::hasMany('tasks', [
                AdminFormElement::text('line', 'Задача')
                    ->required(),
            ]),
        ]);

        $tabs->appendTab($formShorts, 'Проблематика и вызовы', false);

        // Решения
        $formShorts = AdminForm::elements([
            AdminFormElement::hasMany('solutions', [
                AdminFormElement::text('line', 'Решение')
                    ->required(),
            ]),
        ]);

        $tabs->appendTab($formShorts, 'Решения', false);

        // Результаты
        $formResult = AdminForm::elements([
            AdminFormElement::text('result.description', 'Описание')
                ->required(),
            AdminFormElement::image('result.before', 'До')
                ->setUploadPath(static function (UploadedFile $file) {
                    return 'storage/stories/before';
                })
                ->required(),
            AdminFormElement::image('result.after', 'После')
                ->setUploadPath(static function (UploadedFile $file) {
                    return 'storage/stories/after';
                })
                ->required(),
        ]);

        $tabs->appendTab($formResult, 'Результаты', false);

        // Бейджи
        $formBadges = AdminForm::elements([
            AdminFormElement::hasMany('badges', [
                AdminFormElement::text('title', 'Заголовок')
                    ->required(),
                AdminFormElement::text('value', 'Значение'),
            ]),
        ]);

        $tabs->appendTab($formBadges, 'Бейджи', false);

        // SEO
        $seoTitleHelp = 'Если не указан будет использоваться заголовок истории.';
        include 'seo_tab.php';

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
     * @param int $id
     * @return void
     */
    public function onRestore(int $id): void
    {
        // remove if unused
    }
}
