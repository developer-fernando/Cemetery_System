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
        $this->app->bind(
            \App\Repositories\Contracts\UsuarioRepositoryInterface::class,
            \App\Repositories\Implementations\UsuarioRepository::class
        );

        $this->app->bind(
            \App\Services\Contracts\UsuarioServiceInterface::class,
            \App\Services\Implementations\UsuarioService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
