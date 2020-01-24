<?php

namespace App\Http\Middleware;

use Closure;

class HakAkses
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
        $hakAkses = auth()->user()->role();
        if ($hakAkses == 'admin') {
            return $next($request);

            // return redirect('/order');
        } elseif ($hakAkses == 'customer') {
            return redirect('/home');
        } else {
            return redirect ('/');
        }

        return $next($request);

    }
}
