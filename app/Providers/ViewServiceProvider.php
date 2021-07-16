<?php

namespace App\Providers;

use App\View\Composers\BurgerMenuComposer;
use App\View\Composers\FooterMenuComposer;
use App\View\Composers\TopMenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('_partials.header', TopMenuComposer::class);
        View::composer('_partials.header', BurgerMenuComposer::class);
        View::composer('_partials.footer', FooterMenuComposer::class);
    }
}
