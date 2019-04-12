<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminCheckMiddleware
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
if(!Auth::user()->hasRole('Super_Admin')){

  return  abort(500);
}


        return $next($request);
    }
}
