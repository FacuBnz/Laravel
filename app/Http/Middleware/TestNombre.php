<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestNombre
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $nombre = $request->route('nombre');
        if(is_null($nombre) || is_numeric($nombre)){
            return redirect('/');
        }
        return $next($request);
    }
}
