<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //NEW: Import Schema
use Illuminate\Support\Facades\View;
use App\MOdel\Bref;
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
        try {
            DB::connection()->getPdo();
            $brefs = Bref::find(1);
             View::share('brefs',$brefs );

        }
         catch (\Exception $e) {
          //  die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
        Schema::defaultStringLength(191); //NEW: Increase StringLength
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
