<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // Config
        View::share('theme', ($this->getTheme() ?? 1));
    }

    public function getTheme()
    {
        if (DB::connection()->getTablePrefix('settings')) {
            return optional(Setting::find(1)->theme_id ?? 1);
        } else {
            return 1;
        }


    }
}