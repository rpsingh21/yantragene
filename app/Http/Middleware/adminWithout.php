<?php

namespace App\Http\Middleware;

use Closure;

class adminWithout
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
        if(session()->has('admin')){
            return redirect('admin/dashbord');
        }
        return $next($request);
    }
}
