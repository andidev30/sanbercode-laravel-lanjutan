<?php

namespace App\Http\Middleware;

use Closure;

class FilterName
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
        $nama = "andi ";
        if(strlen($nama) < 5) {
            abort(403);
        }
        return $next($request);
    }
}
