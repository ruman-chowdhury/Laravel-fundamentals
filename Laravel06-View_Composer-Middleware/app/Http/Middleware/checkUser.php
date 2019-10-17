<?php

namespace App\Http\Middleware;

use Closure;

class checkUser
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
        $chk = 5;
        if($chk != 5){

            return $next($request); //this should be in true, 

        }else{
            
            dd('try again!');

        }
        
     
    }
}
