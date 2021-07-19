<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ImprimeController extends Controller
{
    public function imprime(){

        $pdf = new PDF();

        $pdf = PDF::loadView('Formacion.pdf.imprime');
    
        //$pdf->render();

        return $pdf->stream('primer.pdf');
    }
}
