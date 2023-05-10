<?php

namespace App\Providers;

// use Dotenv\Validator;
use Illuminate\Support\ServiceProvider;
use App\Rules\CedulaEcuador;
use Illuminate\Support\Facades\validator;

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
        Validator::extend('cedula_ecuador',CedulaEcuador::class);
    }
}
