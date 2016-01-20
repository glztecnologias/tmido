<?php

namespace App\Http\Middleware;

use Closure;
use App\Publicacion as Publicacion;

class VisitaPublicacion
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
        $publicacion = Publicacion::find($request->id);
        $publicacion->contador++;
        $publicacion->save();
        return $next($request);
    }
}
