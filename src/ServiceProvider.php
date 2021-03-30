<?php
namespace AliAbdalla\DataGrid;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/data-grid.php' => config_path('data-grid.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                // InstallCommand::class,
                // NetworkCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/data-grid.php', 'data-grid'
        );
    }
}
