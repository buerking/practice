<?php

namespace App\Http\Middleware;

use Closure;

class ShowAge
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
        echo '20';
        return $next($request);
    }
}
