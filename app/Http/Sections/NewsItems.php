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
            ->setPriority(300)
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
     *
     * @return FormInterface
     * @throws \Exception
     */
    public function onEdit(): FormInterface
    {
        return AdminForm::card()->addBody([
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
