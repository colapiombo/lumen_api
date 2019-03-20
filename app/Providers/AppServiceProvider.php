<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\Resource;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    //    Resource::withoutWrapping();
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
