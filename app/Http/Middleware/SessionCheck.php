<?php

namespace App\Http\Middleware;

use Closure;

class SessionCheck
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
        if(!$request->session()->has('email')){
            return redirect('/login')->with('danger','Unautohorized Action..Login First');
        }
        
        return $next($request);
    }
}
