<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //NEW: Import Schema
use Illuminate\Support\Facades\View;
use App\Models\Briefs;
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
            $briefs = Briefs::find(1);
             View::share('briefs',$briefs );

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
