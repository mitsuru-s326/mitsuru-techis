<?php

namespace App\Providers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Gate;
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
        
        
        if (\App::environment(['production'])) {
            \URL::forceScheme('https');
            $this->app['request']->server->set('HTTPS','on');

       
        }
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }
}