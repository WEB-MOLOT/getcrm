<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use Illuminate\Database\Eloquent\Builder;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Section;

/**
 * Class UserProducts
 *
 * @property \App\Models\UserProduct $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class UserProducts extends Section
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay(array $payload = []): DisplayInterface
    {
        $userId = $payload['user_id'] ?? null;

        $columns = [
            AdminColumn::text('id', '#')
                ->setWidth('50px')
                ->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('code', 'Код'),
            AdminColumn::text('name', 'Продукт или услуга'),
            AdminColumn::datetime('finished_at', 'Дата окончания')->setFormat('d.m.Y'),
        ];

        $display = AdminDisplay::table()
            ->paginate(100)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) use ($userId) {
            $query->latest('finished_at')->where('user_id', '=', $userId);
        });

        return $display;
    }
}
