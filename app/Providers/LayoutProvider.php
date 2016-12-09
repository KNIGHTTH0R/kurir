<?php

namespace App\Providers;

use App\Libraries\LayoutManager;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class LayoutProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(LayoutManager::class, function ($app) {
            return LayoutManager::getInstance($this->app->make(Request::class));
        });
    }

    public function provides()
    {
        return [LayoutManager::class];
    }
}