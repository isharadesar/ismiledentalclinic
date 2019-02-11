<?php

namespace App\Http\Middleware;

//use Cartalyst\Sentinel\Sentinel;
use Closure;
use Sentinel;

class AuthenticationMiddleware
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
        if(Sentinel::check())
        {
            return $next($request);
        }
        return redirect('/login');

    }
}
