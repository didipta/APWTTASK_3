<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class pagevalidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->get('username')){
            return $next($request);
        }
        return redirect()->route('home');
        
    }
}
