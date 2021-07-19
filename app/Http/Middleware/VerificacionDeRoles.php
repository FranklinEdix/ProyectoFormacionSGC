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
            return redirect('DirectorEscuela');//RUTA DIRECTOR DE ESCUELA
        }
        if (auth()->user() -> Id_Rol == "3") {
            return redirect('Decano');//RUTA DECANO
        }
        if (auth()->user() -> Id_Rol == "4") {
            return redirect('RegistrosAcademicos');//RUTA REGISTROS ACADEMICOS
        }
        if (auth()->user() -> Id_Rol == "5") {
            return redirect('Admision');//RUTA ADMISION
        }
        if (auth()->user() -> Id_Rol == "6") {
            return redirect('Docente');//RUTA DOCENTE
        }
        if (auth()->user() -> Id_Rol == "7") {
            return redirect('DocenteTutor');//RUTA DOCENTE TUTOR
        }
        if (auth()->user() -> Id_Rol == "8") {
            return redirect('Psicopedagogia');//RUTA PSICOPEDAGOGIA
        }
        if (auth()->user() -> Id_Rol == "9") {
            return redirect('RelacionesInternacionales');//RUTA RELACIONES INTERNACIONALES
        }
        if (auth()->user() -> Id_Rol == "10") {
            return redirect('UnidadPedagogia');//RUTA UNIDAD PEDAGOGIA
        }
        if (auth()->user() -> Id_Rol == "11") {
            return redirect('AttSeguimientoEgresado');//RUTA ATT SEGUIMIENTO EGRESADO
        }
        if (auth()->user() -> Id_Rol == "12") {
            return redirect('VirrectoradoAcademico');//RUTA VIRRECTOR ACADEMICO
        }
    }
}