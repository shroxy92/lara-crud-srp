<?php

namespace App\Providers;

use App\Repository\Contracts\RegisterRepositoryInterface;
use App\Repository\RegisterRepositoryImp;
use App\Services\Contracts\RegistrationServiceInterface;
use App\Services\RegistrationServiceImp;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(RegistrationServiceInterface::class,RegistrationServiceImp::class);
        $this->app->bind(RegisterRepositoryInterface::class,RegisterRepositoryImp::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
