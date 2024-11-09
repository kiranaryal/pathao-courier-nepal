<?php


namespace Kiranaryal\PathaoCourierNepal;


use Illuminate\Support\ServiceProvider;
use Kiranaryal\PathaoCourierNepal\Commands\PathaoCourierCommand;

class PathaoCourierServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/pathao-courier.php',
            'pathao-courier'
        );
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        // Config
        $this->publishes([
            __DIR__ . '/../config/pathao-courier.php' => config_path('pathao-courier.php')
        ], 'pathao-courier-config');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PathaoCourierCommand::class,
            ]);
        }
    }
}
