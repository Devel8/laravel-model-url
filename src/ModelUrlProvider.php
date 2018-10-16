<?php

namespace Devel8\LaravelModelUrl;

use Illuminate\Support\ServiceProvider;

class ModelUrlProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/model-url.php' => config_path('model-url.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/model-url.php', 'model-url'
        );
    }
}
