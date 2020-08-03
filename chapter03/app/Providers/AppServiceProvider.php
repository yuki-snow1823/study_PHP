<?php

namespace App\Providers;

use App\Repository\UserRepository;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    // ここが最初
    public function register()
    {
        // その次がここ。バインド、使えるようにしている
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
