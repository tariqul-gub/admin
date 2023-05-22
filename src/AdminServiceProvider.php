<?php

namespace TariqulGub\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'admin');
        $this->mergeConfigFrom(__DIR__ . '/config/admin.php', 'admin');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/tariqul-gub/admin'),
            __DIR__ . '/public' => public_path('vendor/tariqul-gub/admin'),
        ], 'tariqul-gub-admin-views');

        $this->publishes([
            __DIR__ . '/public' => public_path('vendor/tariqul-gub/admin'),
        ], 'tariqul-gub-admin-assets');

        $this->publishes([
            __DIR__ . '/config/admin.php' => config_path('admin.php'),
        ], 'tariqul-gub-admin-config');
    }
    public function register(): void
    {
    }
}