<?php

namespace App\Services\Formacion;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\SedeModel;
class SOrigenNorma
{

    public static function get($tipo)
    {
       //$datosOrigenNormas = OrigenNorma::all();
       /*$datosOrigenNormas=DB::table('formacion_normas')
        ->join('origen_normas','formacion_normas.origen','=','origen_normas.id')
        ->select('formacion_normas.id','origen_normas.nombre')
        ->where('origen_normas.tipo','=',$tipo)
        ->get();*/
        $datosOrigenNormas=DB::table('origen_normas')
        ->select('origen_normas.id','origen_normas.nombre')
        ->where('origen_normas.tipo','=',$tipo)
        ->get();
        if(sizeof($datosOrigenNormas)==0){
            $datosOrigenNormaArrary[''] = 'Sin Datos';
        }else{
            foreach ($datosOrigenNormas  as $datosOrigenNorma) {
                $datosOrigenNormaArrary[$datosOrigenNorma->id] = $datosOrigenNorma->nombre;
            }
        }

        return $datosOrigenNormaArrary;
    }

}
