<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use App\Models\Funcionarios;
use App\Models\Departamentos;


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
        Schema::defaultStringLength(191);

        // Partial para ver funcionarios na home
        view()->composer('partials.allFuncionarios',function($view) {
            $view->with('funcionarios',\App\Models\Funcionarios::all());
        });

        // Partial para ver departamentos na home
        view()->composer('partials.allDepartamentos',function($view) {
            $view->with('departamentos',\App\Models\Departamentos::all());
        });

        // Partial para cadastrar funcionarios
        view()->composer('partials.cadFunc',function($view) {
            $view->with('departamentos',\App\Models\Departamentos::all());
        });
        
        // Partial para cadastrar movimentações
        view()->composer('partials.cadMov',function($view) {
            $view->with('departamentos',\App\Models\Departamentos::all())
                    ->with('funcionarios',\App\Models\Funcionarios::all());
        });

        // dd(\App\Models\Funcionarios::all());
        // CHAMA FUNCIONARIO PROVIDER AQUI....

        // view()->composer('cadastros.users', function($view){
        //     $view->with('users', Auth::Users());
        // });

    }
}
