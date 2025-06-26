<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
<<<<<<< HEAD
        $this->app->bind(
            \App\Repositories\Contracts\UsuarioRepositoryInterface::class,
            \App\Repositories\Implementations\UsuarioRepository::class
        );

        $this->app->bind(
            \App\Services\Contracts\UsuarioServiceInterface::class,
            \App\Services\Implementations\UsuarioService::class
        );
=======
        //
>>>>>>> adaef6a94d41c10e2d158db932439fc6c168ff34
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
