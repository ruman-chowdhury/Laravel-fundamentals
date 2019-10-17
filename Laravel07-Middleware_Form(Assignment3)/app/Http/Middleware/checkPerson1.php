<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class checkPerson1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $age = $request->age;
        if ($age > 25){
            return $next($request);

        }else{

           return Redirect::to('/errMessage');
           // dd('opps');
        }

    }
}
