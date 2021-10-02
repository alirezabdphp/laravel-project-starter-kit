<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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

        /**
         * Customize Input Form
         */
        Blade::include('layouts.backend.particles.form.form-control-input', 'input');
        Blade::include('layouts.backend.particles.form.form-control-select', 'select');
        Blade::include('layouts.backend.particles.form.form-control-textarea', 'textarea');
        Blade::include('layouts.backend.particles.form.image-with-preview', 'imageWithPreview');


        /**
         * Create Some Buttons
         */
        Blade::include('layouts.backend.particles.card-footer-buttons-delete', 'deleteBtn');
        Blade::include('layouts.backend.particles.card-footer-buttons-create', 'createPageBtn');
        Blade::include('layouts.backend.particles.card-footer-buttons-edit', 'updatePageBtn');


        /*
         * Create if Conditions
         */
        Blade::if('admin',function (){
            return auth()->check() && auth()->user()->role == 1;
        });
    }
}
