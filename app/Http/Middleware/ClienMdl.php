<?php

namespace App\Http\Middleware;

use Closure;

class ClienMdl
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
        if (!session()->has('Cliente')) {
            return back();
        }
        return $next($request);
    }
}
