<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
    { //Lo que se está haciendo es agregar un ajuste de los verbos de ruta para que aparescan en español
        Route::resourceVerbs([
            'create'=>'crear',
            'edit'=>'editar',
        ]);
    }
}
