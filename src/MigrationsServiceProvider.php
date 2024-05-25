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

        // Enables migrations to be loaded automatically. I am a bit afraid of this even though it os convient
        // $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }
}


