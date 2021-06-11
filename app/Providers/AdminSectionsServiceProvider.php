<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\Models\NewsItem::class => 'App\Http\Sections\NewsItems',
        \App\Models\Vacancy::class => 'App\Http\Sections\Vacancies',
        \App\Models\Administrator::class => 'App\Http\Sections\Administrators',
        \App\Models\Customer::class => 'App\Http\Sections\Customers',
        \App\Models\Company::class => 'App\Http\Sections\Companies',
        \App\Models\Pages\AboutPage::class => 'App\Http\Sections\Pages\AboutPage',
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
        //

        parent::boot($admin);
    }
}
