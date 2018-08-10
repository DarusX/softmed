<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consulta;
use Carbon\Carbon;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ['data' => Consulta::all()];
        if (Auth::user()->role_id == 1) {
            return view('home')->with([
                'consultas' => Consulta::whereDate('fecha', '=', Carbon::today())->get()
            ]);
            # code...
        } else {
            # code...
        }
        
    }
}