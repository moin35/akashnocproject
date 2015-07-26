<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Header;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $hd=Header::orderBy('id','DESC')->first();
        view()->share(['p'=>$hd]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
