<?php

namespace Arostech\Migrations;

use Illuminate\Support\ServiceProvider;

class MigrationsServiceProvider extends ServiceProvider {
    
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishesMigrations([
            __DIR__.'/../database/migrations/2024_01_27_122050_create_images_table.php' => database_path('migrations'),
        ]);
    }
}


