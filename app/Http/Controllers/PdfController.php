<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PdfController extends Controller
{

public function imprimir_receta();

{
	  $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
	$pdf = \PDF::loadView('vista');
	return $pdf->stream ('archivo.pdf');
    //
}

}