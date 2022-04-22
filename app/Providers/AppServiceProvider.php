<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        //
        Schema::defaultStringLength(191);

        $categories = Category::get()->random(5);
        $user = Auth::user();
        $setting = Setting::first();

        view::share(['categories' => $categories, 'user' => $user, 'setting' => $setting]);

    }
}
