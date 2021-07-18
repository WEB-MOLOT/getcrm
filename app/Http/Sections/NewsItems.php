<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Models\NewsItem;
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
 * Class NewsItems
 *
 * @property NewsItem $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class NewsItems extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Новости';

    /**
     * @var string
     */
    protected $alias = 'news';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()
            ->setPriority(600)
            ->setIcon('fas fa-newspaper');
    }

    /**
     *
     * @return DisplayInterface
     * @throws \SleepingOwl\Admin\Exceptions\Form\Element\SelectException
     */
    public function onDisplay(): DisplayInterface
    {
        $columns = [
            AdminColumn::text('id', '#')
                ->setWidth('50px')
                ->setHtmlAttribute('class', 'text-center'),
            AdminColumn::image('image'),
            AdminColumn::datetime('published_at', 'Дата публикации')
                ->setWidth('200px')
                ->setFormat('d.m.Y H:i:s'),
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
            $query->latest('published_at');
        });

        return $display;
    }

    /**
     * @param int|null $id
     * @return FormInterface
     */
    public function onEdit(?int $id = null): FormInterface
    {
        $card = AdminForm::card();

        $form = AdminForm::elements([
            AdminFormElement::datetime('published_at', 'Дата и время публикации')
                ->setHelpText('Сортировка новостей идет по этому полю. Так же новость не будет размещена на сайте до наступления указанного времени.'),
            AdminFormElement::text('slug', 'Слаг')
                ->setHelpText('Уникальная часть ссылки на новость')
                ->addValidationRule('alpha_dash', 'Разрешены только латинские буквы, цифры, подчеркивание и дефис.')
                ->unique()
                ->required(),
            AdminFormElement::text('title', 'Заголовок')
                ->required(),
            AdminFormElement::textarea('description', 'Анонс')
                ->required(),
            AdminFormElement::wysiwyg('content', 'Содержание')
                ->required(),
            AdminFormElement::image('image', 'Изображение')
                ->setUploadPath(static function (UploadedFile $file) {
                    return 'storage/news';
                })
                ->required(),
        ]);

        $tabs = AdminDisplay::tabbed();

        $tabs->appendTab($form, 'Новость', true);

        $seoTitleHelp = 'Если не указан будет использоваться заголовок новости.';
        $seoDescriptionHelp = 'Если не указан будет использоваться анонс новости.';
        include 'seo_tab.php';


        $card->getButtons()->setButtons([
            'save_and_close' => (new SaveAndClose())->setText('Сохранить'),
            'cancel' => (new Cancel()),
        ]);

        return $card->addBody([$tabs]);
    }

    /**
     * @return FormInterface
     * @throws \Exception
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
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
