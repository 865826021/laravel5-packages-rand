<?php

namespace Yuxiaoyang\Rander;

use Illuminate\Support\ServiceProvider;

class RanderProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('rander',function(){
            return new Rander();
        });//app('rander')
    }
}
