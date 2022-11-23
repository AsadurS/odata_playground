<?php

namespace App\Providers;

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
        \Lodata::discover(\App\Models\User::class);
        \Lodata::discover(\App\Models\Role::class);
        \Lodata::discover(\App\Models\Post::class);
    }
}
