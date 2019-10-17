<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

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
      
        // *=for all blade pages,for specific pages need to pass as array
        //if we want to pass same value to multiple pages,then we can use this View::composer 

        View::composer(['index','welcome'],function($view){
            $view->with('api','apivalue-007');
        });

        /*
        View::composer('index',function($view){
            $view->with('api','apivalue-007');
        });
        
        View::composer('*',function($view){
            $view->with('api','apivalue-007');
        });
                
        */


    }
}
