<?php

namespace App\Services\Procesos;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\SedeModel;
class SProcesos
{

    public static function getDataProcess($idproceso)
    {
       //$datosOrigenNormas = OrigenNorma::all();
       $datosProcesos=DB::table('procesos')
        //->join('origen_normas','formacion_normas.origen','=','origen_normas.id')
        ->select('idproceso','nombreproceso')
        ->where('nombreproceso','=',$idproceso)
        ->get();
        return $datosProcesos;
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
