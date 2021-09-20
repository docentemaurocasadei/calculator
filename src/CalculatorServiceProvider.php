<?php

namespace Devmauro\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Devmauro\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__ . '/views', 'calculator');

        $this->app->bind(Calcola::class, function ($app) {
            return new Calcola();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
    }
}
