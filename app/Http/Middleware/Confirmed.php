<?php

namespace App\Http\Middleware;

use Closure;

class Confirmed
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
        if (auth()->check() && ! is_null(auth()->user()->email_verified_at)) {
            return $next($request);
        }

        return abort(403);
    }
}
