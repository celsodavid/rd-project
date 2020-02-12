<?php

namespace App\Providers;

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
        $this->app->register(\Raiadrogasil\Common\ServiceProvider::class);
        $this->app->register(\Raiadrogasil\Configuration\ServiceProvider::class);
    }
}
