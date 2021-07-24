<?php

namespace App\Services;

use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Enums\BlockType;
use App\Models\Page;
use Exception;
use Illuminate\Http\UploadedFile;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Display\DisplayTabbed;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\FormCard;

class EditFormFactory
{
    protected FormCard $card;

    protected DisplayTabbed $tabs;

    protected Page $page;

    public function __construct(Page $page)
    {
        $this->page = $page;
        $this->card = AdminForm::card();
        $this->tabs = AdminDisplay::tabbed();
    }

    /**
     * @throws Exception
     */
    public static function create(Page $page): FormInterface
    {
        $editForm = new EditFormFactory($page);

        $editForm
            ->addDefaultForm()
            ->addSeoForm();

        $editForm->card->getButtons()->setButtons([
            'save_and_continue' => (new Save())->setText('Сохранить'),
        ]);

        return $editForm->card->addBody([$editForm->tabs]);
    }

    protected function addSeoForm(): EditFormFactory
    {
        $seoTitleHelp = 'Если не указан будет использоваться заголовок страницы.';

        $form = AdminForm::elements([
            AdminFormElement::text('seo.title', 'TITLE')
                ->setHelpText($seoTitleHelp ?? ''),
            AdminFormElement::text('seo.keywords', 'KEYWORDS')
                ->setHelpText($seoKeywordsHelp ?? ''),
            AdminFormElement::textarea('seo.description', 'DESCRIPTION')
                ->setHelpText($seoDescriptionHelp ?? ''),
            AdminFormElement::checkbox('seo.disable_index', 'Отключить индексирование'),
        ]);
        $this->tabs->appendTab($form, 'SEO', false);

        return $this;
    }

    /**
     * @throws Exception
     */
    protected function addDefaultForm(): EditFormFactory
    {
        $form = AdminForm::elements([
            AdminFormElement::text('name', 'Заголовок')
                ->required(),
            '<hr/>',
        ]);

        foreach ($this->page->blocks->sortBy('order') as $block) {
            $element = match ($block->type->value()) {
                BlockType::TEXT, BlockType::VIDEO => AdminFormElement::text($block->slug, $block->label),
                BlockType::HEADER => "<h4>{$block->label}</h4>" . ($block->content ? "<p>{$block->content}</p>" : ''),
                BlockType::IMAGE => AdminFormElement::image($block->slug, $block->label),
                BlockType::TEXTAREA => AdminFormElement::textarea($block->slug, $block->label),
                BlockType::EDITOR => AdminFormElement::wysiwyg($block->slug, $block->label),
                BlockType::LIST => AdminFormElement::hasManyLocal($block->slug, [
                    AdminFormElement::text('name', 'Текст'),
                ], $block->label),
                BlockType::LIST_WITH_ICON => AdminFormElement::hasManyLocal($block->slug, [
                    AdminFormElement::text('name', 'Текст'),
                    AdminFormElement::image('icon', 'Иконка')
                        ->setUploadPath(static function (UploadedFile $file) {
                            return 'storage/contents';
                        })
                ], $block->label),
                default => throw new Exception('Component not found'),
            };

            $form->addElement($element);
        }

        $this->tabs->appendTab($form, 'Страница', true);

        return $this;
    }
}
