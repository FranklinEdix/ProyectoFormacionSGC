<?php

namespace App\Http\Controllers;

use App\Models\FormacionNorma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\Formacion\SOrigenNorma;
use App\Services\Procesos\SProcesos;
use Illuminate\Support\Facades\DB;

class FormacionNormaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$normas = FormacionNorma::all();
        
        $normas=DB::table('formacion_normas')
        ->join('origen_normas','formacion_normas.origen','=','origen_normas.id')
        ->select('formacion_normas.*','origen_normas.nombre')
        ->get();
        return view('GestorNormas.index')->with('normas',$normas);
        //return "WIZARD";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$datosOrigenNormas = SOrigenNorma::get();
        $Procesos = SProcesos::getAllProcess();
        return view('GestorNormas.create')->with('procesos',$Procesos);
    }

    public function viewDataFormacion()
    {
        //
        //$normas = FormacionNorma::all();//POR AHORA SE ESTÁ MOSTRANDO TODOS LOS DATOS
        $normas=DB::table('formacion_normas')
        ->join('origen_normas','formacion_normas.origen','=','origen_normas.id')
        ->select('formacion_normas.*','origen_normas.nombre')
        ->where('formacion_normas.id_proceso','=','FORMACION')//FILTRO PARA PROCESO SOLO DE FORMACION
        ->get();
        //return $normas;
        return view('Formacion.Normativa.index')->with('normas',$normas);
    }

    public function filtroNormas(Request $request)
    {
        //
        $normas=DB::table('formacion_normas')
        ->join('origen_normas','origen_normas.id','=','formacion_normas.origen')
        ->select('formacion_normas.*')
        ->where('origen_normas.tipo','=',$request->filtro)
        ->get();

        return $normas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'file'=>'required|mimes:pdf',
            'puntonorma'=>'required',
            'descripcion'=>'required',
            'origen'=>'required'
        ]);
        //dd($request->file('file'));
        $fNorma = new FormacionNorma();
        //$fNorma -> id_proceso = $request -> get('Selectnorma');
        $fNorma -> id_proceso = $request -> get('Procesos');//POR VERIFICAR PARA LOS DEMAS PROCESOS Procesos
        $fNorma -> puntosnorma = $request -> get ('puntonorma');//
        $fNorma -> descripcion = $request -> get('descripcion');// php artisan storage:link
        $fNorma -> rpdfNorma = Storage::url($request -> file('file')->store('public/pdfsNorma'));
        $fNorma -> origen = $request -> get('origen');
        
        $fNorma -> save();

        return redirect('/dashboard/gestionNorma');
        //return $request->get('origen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$normas = FormacionNorma::find($id);
        
        $normas=DB::table('formacion_normas')
        ->join('origen_normas','origen_normas.id','=','formacion_normas.origen')
        ->select('origen_normas.tipo','formacion_normas.puntosnorma','formacion_normas.descripcion','formacion_normas.rpdfNorma','formacion_normas.id','formacion_normas.origen','formacion_normas.id_proceso')
        ->where('formacion_normas.id','=',$id)
        ->get();
        //return $normas;ss
        /*
        $tipos=DB::table('origen_normas')
        ->select('tipo')
        ->where('id','=',$id)
        ->get();*/
        //$normas = $dnormas[0] ;
        //return $normas;
        $datosOrigenNormas = SOrigenNorma::get($normas[0]->tipo);
        $Procesos = SProcesos::getAllProcess();
        return view('GestorNormas.edit')->with('normas',$normas[0])->with('datosOrigenNormas',$datosOrigenNormas)->with('procesos',$Procesos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request -> validate([
            'puntonorma'=>'required',
            'Procesos'=>'required',
            'descripcion'=>'required',
            'origen'=>'required'
        ]);
        $normas = FormacionNorma::find($id);
        //$fNorma -> id_proceso = $request -> get('Selectnorma');
        $normas -> id_proceso  = $request -> get('Procesos');
        $normas -> puntosnorma = $request -> get ('puntonorma');//
        $normas -> descripcion = $request -> get('descripcion');//
        if($request-> hasfile('file')){
            $request ->validate([
                'file'=>'required|mimes:pdf'
            ]);
            $normas -> rpdfNorma = Storage::url($request -> file('file')->store('public/pdfsNorma'));
            //return $normas -> rpdfNorma;
        }
        $normas -> origen      = $request -> get('origen');
        $normas -> save();

        return redirect('/dashboard/gestionNorma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fNorma = FormacionNorma::find($id);
        $fNorma->delete();
        return redirect('/dashboard/gestionNorma');
    }
}
