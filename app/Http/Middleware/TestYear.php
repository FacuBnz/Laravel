<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestYear
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
        //En request llegan todas las peticiones http
        //para seleccionar un parametro get utilizo el metodo route()
        $year = $request->route('year');
        //Comprobar si llega el año

        if(is_null($year) || $year != 2019){
            return redirect('/pelicula');
        }
        return $next($request);
    }
}
