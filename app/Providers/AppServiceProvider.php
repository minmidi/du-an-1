<?php

namespace App\Providers;

use App\Models\About;
use App\Models\WebSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $settings = WebSetting::all();
        $abouts = About::all();
        View::share(compact('settings', 'abouts'));
    }
}
