<?php

namespace App\Providers;

use App\Enums\SettingType;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('_partials.paginator');

        $this->getConfigFromDb();
    }

    protected function getConfigFromDb()
    {
        Setting::all()->each(static function (Setting $setting) {
            $value = match ($setting->type->value()) {
                SettingType::NUMBER => intval($setting->value),
                SettingType::CHECKBOX => $setting->value === '1',
                default => $setting->value === '' ? null : $setting->value,
            };
            config()->set($setting->name, $value);
        });
    }
}
