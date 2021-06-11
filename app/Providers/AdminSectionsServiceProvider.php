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
        \App\Models\Service::class => 'App\Http\Sections\Services',
        \App\Models\Solution::class => 'App\Http\Sections\Solutions',

        \App\Models\Pages\AboutPage::class => 'App\Http\Sections\Pages\AboutPage',
        \App\Models\Pages\ContactsPage::class => 'App\Http\Sections\Pages\ContactsPage',
        \App\Models\Pages\CustomExperiencePage::class => 'App\Http\Sections\Pages\CustomExperiencePage',
        \App\Models\Pages\HomePage::class => 'App\Http\Sections\Pages\HomePage',
        \App\Models\Pages\LandingPage::class => 'App\Http\Sections\Pages\LandingPage',

        \App\Models\Dictionaries\AmountDiscount::class => 'App\Http\Sections\Dictionaries\AmountDiscounts',
        \App\Models\Dictionaries\Service::class => 'App\Http\Sections\Dictionaries\Services',
        \App\Models\Dictionaries\Solution::class => 'App\Http\Sections\Dictionaries\Solutions',
        \App\Models\Dictionaries\Filter::class => 'App\Http\Sections\Dictionaries\Filters',
        \App\Models\Dictionaries\License::class => 'App\Http\Sections\Dictionaries\Licenses',
        \App\Models\Dictionaries\PeriodDiscount::class => 'App\Http\Sections\Dictionaries\PeriodDiscounts',
        \App\Models\Dictionaries\Platform::class => 'App\Http\Sections\Dictionaries\Platforms',

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
