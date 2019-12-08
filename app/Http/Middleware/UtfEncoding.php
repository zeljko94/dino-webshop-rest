<?php

namespace App\Http\Middleware;

use Closure;

class UtfEncoding
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
        $response = $next($request);
        $response->header('Content-Type', 'application/json; charset=utf-8');

        return $response;
    }
}
