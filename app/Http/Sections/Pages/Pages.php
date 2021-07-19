<?php

namespace App\Http\Sections\Pages;

use App\Models\Page;
use App\Models\Pages\PrivacyPage as ModelPage;
use App\Services\EditFormFactory;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Pages
 *
 * @property \App\Models\Page $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Pages extends Section
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @return DisplayInterface
     */
    public function onDisplay(): DisplayInterface
    {
        $page = $this->getPageModel();

        return $this->fireEdit($page->id);
    }

    /**
     * @param int|null $id
     * @param array $payload
     * @return FormInterface
     */
    public function onEdit(?int $id = null, array $payload = []): FormInterface
    {
        $page = $this->getPageModel();

        return EditFormFactory::create($page);
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
        return false;
    }

    /**
     * @param Model $model
     * @return bool
     */
    public function isDeletable(Model $model): bool
    {
        return false;
    }

    protected function getPageModel(): ?Page
    {
        return ModelPage::firstOrFail();
    }
}
