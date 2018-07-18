<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PdfController extends Controller
{

/*public function imprimir();

{
	return view('imprimir');
	 /* $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

	$pdf = \PDF::loadView('pdf.vista',$imprimir_receta);
	return $pdf->stream ('vista.pdf');
 


    //*/
 @return void 
 public function _contruct()
 {
 	$this->middleware('guest');
 }


@return Response 

public function imprimir()
{
	$pacientes = \DB::table('pacientes')
	->select(['id','nombre','paterno','materno','nacimiento','curp','domicilio'])
	->get();
	$view = \View::make('imprimir',compact('pacientes'))->render();
	$pdf = \App::make('dompdf.wrapper');
	$pdf->loadHTML($view);
	return $pdf->stream('receta'.'pdf')
}

}