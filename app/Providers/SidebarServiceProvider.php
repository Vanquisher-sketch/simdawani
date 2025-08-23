<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // <-- TAMBAHKAN BARIS INI
use App\Models\Ruangan; 

class SidebarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Ganti 'layouts.partials.sidebar' dengan path ke file blade sidebar Anda
        View::composer('layouts.partials.sidebar', function ($view) {
            $view->with('ruangans', Ruangan::orderBy('nama_ruangan', 'asc')->get());
        });
    }
}