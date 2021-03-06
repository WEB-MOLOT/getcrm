<?php

namespace App\Providers;

use App\Enums\SettingType;
use App\Models\Setting;
use App\Services\Cart\CartService;
use App\Services\Cart\CartSessionRepository;
use App\Services\Cart\ICartRepository;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ICartRepository::class, CartSessionRepository::class);
        $this->app->singleton(CartService::class, CartService::class);
    }

    public function boot()
    {
        Paginator::defaultView('_partials.paginator');

        if (Schema::hasTable(Setting::getModel()->getTable())) {
            $this->getConfigFromDb();
        }
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
