<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AbcServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('aaa',function (){
            dd('bbb');
        });
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
