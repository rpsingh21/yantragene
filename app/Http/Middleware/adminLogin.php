<?php

namespace App\Http\Middleware;

use Closure;

class adminLogin
{
    public function handle($request, Closure $next)
    {
        if(!session()->has('admin')){
            return response()->view('admin.adminLogin');
        }
        return $next($request);
    }
}
