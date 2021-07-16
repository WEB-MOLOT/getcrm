<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminColumnFilter;
use AdminDisplay;
use AdminNavigation;
use App\Models\Company;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Display\Column\Filter\Select;
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
     *
     * @return DisplayInterface
     * @throws \SleepingOwl\Admin\Exceptions\Form\Element\SelectException
     */
    public function onDisplay(): DisplayInterface
    {
        $columns = [
            AdminColumn::text('id', '#')
                ->setWidth('50px')
                ->setHtmlAttribute('class', 'text-center')
                ->setSearchable(false)
                ->setOrderable(false),
            AdminColumn::text('company.name', 'Компания')
                ->setSearchable(false)
                ->setOrderable(false),
            AdminColumn::text('name', 'Имя')
                ->setSearchable(true)
                ->setOrderable(false),
            AdminColumn::text('email', 'Логин')
                ->setSearchable(true)
                ->setOrderable(false),
            AdminColumn::text('email', 'E-mail')
                ->setSearchable(true)
                ->setOrderable(false),
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
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->latest('id');
        })->setNewEntryButtonText('Добавить пользователя');

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

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     * @return FormInterface
     */
    public function onEdit(?int $id = null, array $payload = []): FormInterface
    {

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
        return false;
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

    /**
     * @return void
     */
    public function onRestore(int $id)
    {
        // remove if unused
    }
}
