<?php

namespace App\Providers;

use App\Models\Facture;
use Illuminate\Support\ServiceProvider;

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
        //
        // $factures = Facture::all();
        // view()->share('factures', $factures);
    }
}
