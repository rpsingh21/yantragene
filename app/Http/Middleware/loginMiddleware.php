<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
class loginMiddleware
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
        if(!session()->has('user')){
            return back();
        }
        $arr=DB::table('users')
            ->select('status')
            ->where('email','=',$request->email)
            ->get()->first();
        if($arr==null){
            return view('loginreg')->with(['err'=>'You Are Not Registered ',]);
        }
        else if($arr->status==0) {
            return view('otp')->with(['err'=>'Verify Your Email-Id First Then Login',]);
        }
        return $next($request);
    }
}
