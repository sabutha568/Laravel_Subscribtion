<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SubscriberServiceProvider extends ServiceProvider
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
        $this->mergeConfigFrom(
            __DIR__.'/config/subscriber.php', 'subscriber'
        );
        
        $this->publishes([
            __DIR__.'/config/subscriber.php' => config_path('subscriber.php'),
        ]);
        
        $this->publishes([
            __DIR__.'/resources/css' => base_path('/css'),
        ]);
    
        $this->loadViewsFrom(__DIR__.'/views','subscriber'); 
    
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        
    
    }
}
