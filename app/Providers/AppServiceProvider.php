<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $navigation = DB::table('gos_navigation')->orderBy('order', 'asc')->get();
        view()->share('navigation', $navigation);

        $this->publishes([
            __DIR__.'/../../vendor/kartik-v/bootstrap-fileinput' => public_path('vendor/bootstrap-fileinput'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
