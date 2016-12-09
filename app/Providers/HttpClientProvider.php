<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PluginHttpClient\Client;

class HttpClientProvider extends ServiceProvider
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
        $this->app->singleton(Client::class, function ($app) {
            return new Client(config('app.api_url') . '/');
        });
    }

    public function provides()
    {
        return [Client::class];
    }
}