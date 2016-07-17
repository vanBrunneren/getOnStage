<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
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

        $footer_references = DB::table('gos_references')->whereNull('deleted_at')->orderBy('ordering', 'asc')->skip(0)->take(3)->get();
        view()->share('footer_references', $footer_references);

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
