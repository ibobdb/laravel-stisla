<?php

namespace Ibobdb\LaravelStisla;

use Ibobdb\LaravelStisla\LaravelStislaCommand;
use Illuminate\Support\ServiceProvider;

class LaravelStislaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if ($this->app->runningInConsole()) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            $this->loadViewsFrom(__DIR__ . '/../views/', 'stisla');
            $this->publishes([
                __DIR__ . '/../views' => resource_path('views'),
            ]);
            $this->publishes([
                __DIR__ . '/../stisla' => public_path('stisla', 'public'),
            ]);
            $this->commands([
                LaravelStislaCommand::class
            ]);
        }
    }
}
