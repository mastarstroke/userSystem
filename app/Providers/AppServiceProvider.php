<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\IRegisterRepository;
use App\Repository\RegisterRepository;
use App\Repository\ILoginRepository;
use App\Repository\LoginRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IRegisterRepository::class, RegisterRepository::class);
        $this->app->bind( ILoginRepository::class, LoginRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
