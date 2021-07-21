<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Models\Dictionaries\Solution as DictionarySolution;
use App\Models\Review;
use App\Models\Service;
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
 * Class Solutions
 *
 * @property \App\Models\Solution $model
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
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()
            ->setPriority(400)
            ->setIcon('fas fa-project-diagram');
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay(): DisplayInterface
    {
        $columns = [
            AdminColumn::text('id', '#')
                ->setWidth('50px')
                ->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('title', 'Заголовок'),
            AdminColumn::order(),
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

        $tabs = AdminDisplay::tabbed();

        // Решение
        $form = AdminForm::elements([
            AdminFormElement::select('solution_id', 'Связана с решением')
                ->setModelForOptions(DictionarySolution::class, 'name')
                ->required(),
            AdminFormElement::text('subtitle', 'Подзаголовок')
                ->required(),
            AdminFormElement::image('image', 'Изображение')
                ->setUploadPath(static function (UploadedFile $file) {
                    return 'storage/solutions/images';
                })
                ->required(),
            AdminFormElement::text('video', 'Ссылка на видео')
                ->required(),
            AdminFormElement::wysiwyg('description', 'Описание')
                ->required(),
            AdminFormElement::file('booklet', 'Буклет')
                ->setUploadPath(static function (UploadedFile $file) {
                    return 'storage/solutions/booklets';
                })
                ->required(),
        ]);

        $tabs->appendTab($form, 'Решение', true);

        // Описания
        $formDescriptions = AdminForm::elements([
            AdminFormElement::hasMany('descriptions', [
                AdminFormElement::image('icon', 'Иконка')
                    ->setUploadPath(static function (UploadedFile $file) {
                        return 'storage/solutions/icons';
                    })
                    ->required(),
                AdminFormElement::wysiwyg('description', 'Описание')
                    ->required(),
            ]),
        ]);

        $tabs->appendTab($formDescriptions, 'Описания', false);

        // FAQ
        $formFaq = AdminForm::elements([
            AdminFormElement::hasMany('faqItems', [
                AdminFormElement::text('question', 'Вопрос')
                    ->required(),
                AdminFormElement::textarea('answer', 'Ответ')
                    ->required(),
            ]),
        ]);

        $tabs->appendTab($formFaq, 'FAQ', false);

        // Эффекты
        $formDescriptions = AdminForm::elements([
            AdminFormElement::hasMany('effects', [
                AdminFormElement::text('line1', 'Линия 1')
                    ->required(),
                AdminFormElement::text('line2', 'Линия 2')
                    ->required(),
                AdminFormElement::radio('fire', 'Эффект', [
                    1 => 'Повышение',
                    0 => 'Стандарт',
                    -1 => 'Понижение',
                ])
                    ->setSortable(false)
                    ->required(),
            ])->setLimit(3),
        ]);

        $tabs->appendTab($formDescriptions, 'Эффекты', false);

        // Отзывы
        if ($id) {
            $reviews = \AdminSection::getModel(Review::class)->fireDisplay([
                'id' => $id,
                'type' => Service::class,
            ]);
            $tabs->appendTab($reviews, 'Отзывы', false);
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
        return true;
    }
}
