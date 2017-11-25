<?php

namespace Jeremytubbs\UserTimezone;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class UserTimezoneServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        // Load routes
        if (! $this->app->routesAreCached() ) {
            require __DIR__.'/../routes/web.php';
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'timezone');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../resources/assets/js/vendor' => base_path('public/js/vendor'),
        ], 'vendor');

    }
}
