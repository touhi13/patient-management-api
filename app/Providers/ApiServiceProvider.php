<?php

namespace App\Providers;

use App\Repositories\Auth\AuthInterface;
use App\Repositories\Auth\AuthRepo;
use App\Repositories\Patient\PatientInterface;
use App\Repositories\Patient\PatientRepo;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            AuthInterface::class,
            AuthRepo::class
        );
        $this->app->bind(
            PatientInterface::class,
            PatientRepo::class
        );

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
