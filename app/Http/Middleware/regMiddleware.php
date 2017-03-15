<?php

namespace App\Http\Middleware;

use Closure;

class regMiddleware
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
        if(session()->has('user')){
            return back();
        }
        return $next($request);
    }
}
