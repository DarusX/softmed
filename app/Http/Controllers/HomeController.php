<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consulta;
use Carbon\carbon;

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
        $today = Carbon::today()->format('Y-m-d');
        return view('home')->with([
        'consultas' => Consulta::where('fecha', '=', $today)->get()
        ]);
    }
}