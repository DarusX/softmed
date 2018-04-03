<?php

namespace App\Http\Controllers;



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
