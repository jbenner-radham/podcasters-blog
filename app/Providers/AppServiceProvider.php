<?php

namespace App\Providers;

use Barryvdh\Debugbar\ServiceProvider as DebugbarServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Laravolt\Thunderclap\ServiceProvider as ThunderclapServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('datetime', function($expression) {
            return "<?=(new DateTime($expression))->format('F j, Y g:i a')?>";
        });

        Blade::directive('json', function ($data) {
           return "<?=json_encode($data)?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (app()->environment() == 'local') {
            app()->register(DebugbarServiceProvider::class);
            app()->register(IdeHelperServiceProvider::class);
            app()->register(ThunderclapServiceProvider::class);
        }
    }
}
