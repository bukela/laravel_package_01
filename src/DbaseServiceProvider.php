<?php

namespace mirko\dbase;

use Illuminate\Support\ServiceProvider;

class DbaseServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'../src/migrate');
        $this->loadRoutesFrom(__DIR__.'/routes');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'dbase');
        $this->app->make('Mirko\Dbase\DbaseController');
        // $this->app->alias("dbase", "Mirko\Dbase\Dbase");
    }
}