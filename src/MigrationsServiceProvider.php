<?php

namespace Arostech\Migrations;

use Illuminate\Support\ServiceProvider;

class MigrationsServiceProvider extends ServiceProvider {
    
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ],'migrations');
    }
}


