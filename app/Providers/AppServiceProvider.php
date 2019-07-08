<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\theloai;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $vs_theloai = theloai::all();
        view()->share('vs_theloai',$vs_theloai);

    }
}
