<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;
class checkPerson3
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
        $name = $request->name;
        $age = $request->age;

        $strName = 'Ruman Chowdhury';

        if (($name == ucwords($strName) or $name == strtolower($strName)) && $age == 25){
            return $next($request);

        }else{

            return Redirect::to('/errMessage');

        }

    }
}
