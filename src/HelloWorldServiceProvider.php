<?php

namespace D3turnes\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
		$this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
		$this->app->make('D3turnes\HelloWorld\Http\Controllers\MainController');
		
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
