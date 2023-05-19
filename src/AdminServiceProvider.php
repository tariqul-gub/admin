<?php

namespace TariqulGub\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin');
        $this->mergeConfigFrom(__DIR__ . '/../config/admin.php', 'admin');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/admin'),
            __DIR__ . '/../public' => public_path(''),
            //     __DIR__ . '/../config/admin.php' => config_path('admin.php'),
        ], 'tariqul-gub-admin');
    }
    public function register(): void
    {
    }
}
