<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificacionDeRoles
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
        if (auth()->user() -> Id_Rol == "1") {
            return $next($request);//RUTA DASHBOARD
        }
        if (auth()->user() -> Id_Rol == "2") {
            return redirect('Decano');//RUTA DECANO
        }
        if (auth()->user() -> Id_Rol == "3") {
            return redirect('DirectorEscuela');//RUTA DIRECTOR DE ESCUELA
        }
    }
}