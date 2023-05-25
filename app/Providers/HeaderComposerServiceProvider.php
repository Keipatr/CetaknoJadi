<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class HeaderComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        View::composer('layouts.header', 'App\Http\View\Composers\HeaderComposer');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
