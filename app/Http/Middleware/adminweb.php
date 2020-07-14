<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class adminweb
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

        if (!Auth::Check()) {
            if (Auth::check()){
                auth()->logout();
            }
            return redirect('/login');
        }
        return $next($request);
    }
}
