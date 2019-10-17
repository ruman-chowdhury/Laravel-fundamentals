<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class checkPerson2
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
        $strName = 'Ruman Chowdhury';

        if ($name == ucwords($strName) or $name == strtolower($strName)){
            return $next($request);

        }else{

            return Redirect::to('/errMessage');

        }
    }
}
