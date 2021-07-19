<?php

namespace App\Services\UsuariosService;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\SedeModel;
class UsuarioService
{

    public static function getAllDataUser()
    {
       //$datosOrigenNormas = OrigenNorma::all();
       $datosUser=DB::table('users')
        //->join('origen_normas','formacion_normas.origen','=','origen_normas.id')
        ->select('name','email','Id_Rol')
        //->where('nombreproceso','=',$idproceso)
        ->get();
        return $datosUser;
    }
    public static function getAllProcess()
    {
       //$datosOrigenNormas = OrigenNorma::all();
       $datosProcesos=DB::table('procesos')
        //->join('origen_normas','formacion_normas.origen','=','origen_normas.id')
        ->select('idproceso','nombreproceso')
        //->where('nombreproceso','=',$idproceso)
        ->get();
       
            $datosProcess[''] = 'Seleccione un Proceso';
            foreach ($datosProcesos  as $datosProceso) {
                $datosProcess[$datosProceso->idproceso] = $datosProceso->nombreproceso;
            }
        return $datosProcess;
    }

}
