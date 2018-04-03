<?php

namespace App\Http\Controllers;
use App\medicamento;
use Illuminate\Http\Request;
use App\http\requests\createMedicamentoRequest;


class ControladorPaginado extends Controller
{
   public function login()
   {
   	return view('login');
   }
////////////////////////////////////////////////////
	public function home()
   {
   	return view('home');
   }

}
