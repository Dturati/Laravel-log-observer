<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PessoaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \App\pessoa::observe(\App\Observer\PessoaObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
