<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class TutorCheckMiddleware
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
        if(!Auth::user()->hasRole('Tutor')){

            return  abort(500);
            }

        return $next($request);
    }
}
