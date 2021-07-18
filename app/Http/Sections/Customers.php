<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminColumnEditable;
use AdminColumnFilter;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use AdminSection;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Dictionaries\FilterValue;
use App\Models\UserProduct;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Display\Column\Filter\Select;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class Customers
 *
 * @property Customer $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Customers extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Пользователи';

    /**
     * @var string
     */
    protected $alias = 'crm_customers';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('crm');

        $page->addPage(
            $this->makePage(400)->setIcon('fas fa-users')
        );
    }

    /**
     * @param array $payload
     * @return DisplayInterface
     * @throws \SleepingOwl\Admin\Exceptions\Form\Element\SelectException
     */
    public function onDisplay(array $payload): DisplayInterface
    {
        $companyId = $payload['company_id'] ?? null;

        $columns = [
            AdminColumn::text('id', '#')
                ->setWidth('50px')
                ->setHtmlAttribute('class', 'text-center')
                ->setSearchable(false)
                ->setOrderable(false),
            AdminColumn::text('company.name', 'Компания')
                ->setWidth('200px')
                ->setSearchable(false)
                ->setOrderable(false),
            AdminColumn::text('name', 'Имя')
                ->setWidth('300px')
                ->setSearchable(true)
                ->setOrderable(false),
            AdminColumn::text('email', 'Логин/E-mail')
                ->setWidth('200px')
                ->setSearchable(true)
                ->setOrderable(false),
            AdminColumnEditable::checkbox('is_active')
                ->setCheckedLabel('Активен')
                ->setUncheckedLabel('Блок')
                ->setLabel('Активность'),
            AdminColumn::datetime('last_login_at', 'Дата последнего входа')
                ->setSearchable(false)
                ->setFormat('d.m.Y H:i:s')
                ->setOrderable(false),
            AdminColumn::datetime('created_at', 'Дата регистрации')
                ->setSearchable(false)
                ->setFormat('d.m.Y')
                ->setOrderable(false),
        ];

        $display = AdminDisplay::datatables()
            ->paginate(40)
            ->setColumns($columns)
            ->setNewEntryButtonText('Добавить пользователя')
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) use ($companyId) {
            $query->latest('id');

            if ($companyId) {
                $query->where('company_id', '=', $companyId);
            }
        });

        if (empty($companyId)) {
            $display->setColumnFilters([

                AdminColumnFilter::select()
                    ->setModelForOptions(Company::class, 'name')
                    ->setLoadOptionsQueryPreparer(function (Select $element, Builder $query) {
                        return $query;
                    })
                    ->setDisplay('name')
                    ->setColumnName('company_id')
                    ->setPlaceholder('Фильтр по компании')
                ,
            ]);
            $display->getColumnFilters()->setPlacement('card.heading');

            $display->setDisplaySearch(true);
        }

        if ($companyId) {
            $display->setParameter('company_id', $companyId);
        }

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

        $passwordElement = AdminFormElement::password('password', 'Пароль')
            ->hashWithBcrypt();

        if ($id === null) {
            $passwordElement->required()->addValidationRule('min:8');
        } else {
            $passwordElement->setHelpText('Оставьте поле пустым если не хотите менять пароль пользователю.');
        }

        $isVisible = function () use ($id) {
            return $id !== null;
        };

        $form = AdminForm::elements([
            AdminFormElement::text('name', 'ФИО')
                ->required(),
            AdminFormElement::text('email', 'E-mail')
                ->unique()
                ->addValidationRule('email')
                ->required(),
            AdminFormElement::selectajax('company_id', 'Компания из CRM')
                ->setModelForOptions(Company::class, 'name'),
            AdminFormElement::checkbox('is_active', 'Пользователь активен')
                ->setHelpText('Уберите галочку если надо заблокировать пользователя'),
            $passwordElement,
            AdminFormElement::text('firm', 'Компания указанная пользователем')
                ->setVisibilityCondition($isVisible)
                ->setReadonly(true),
            AdminFormElement::text('position', 'Должность')
                ->setVisibilityCondition($isVisible)
                ->setReadonly(true),
            AdminFormElement::text('phones', 'Номер телефона')
                ->setVisibilityCondition($isVisible)
                ->setReadonly(true),
            AdminFormElement::checkbox('has_subscription', 'Подписан на новости')
                ->setVisibilityCondition($isVisible)
                ->setReadonly(true),
            AdminFormElement::text('subscribe_email', 'Адрес электронной почты для подписки')
                ->setVisibilityCondition($isVisible)
                ->setReadonly(true),
        ]);

        $tabs = AdminDisplay::tabbed();

        $tabs->appendTab($form, 'Пользователь', true);

        if ($id) {
            $userProducts = AdminSection::getModel(UserProduct::class)->fireDisplay(['user_id' => $id]);
            $tabs->appendTab($userProducts, 'Продукты и подписки', false);

            $userLicenses = AdminSection::getModel(FilterValue::class)->fireDisplay(['filter_id' => 1]);
            $tabs->appendTab($userLicenses, 'Лицензии', false);
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
     * @return void
     */
    public function onRestore(int $id)
    {
        // remove if unused
    }
}
