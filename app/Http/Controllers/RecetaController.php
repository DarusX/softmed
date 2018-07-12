<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\receta;
use App\consulta;
use App\medicamento;
use App\enfermedad;
use App\nota;
use App\estudio;
use Illuminate\Support\Facades\Redirect;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('receta.index')->with([
            'recetas' => Receta::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('receta.create')->with([
        'consulta'=> Consulta::find($id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Receta::create($request->all());
        return redirect()->route('receta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Receta::with('receta_medicamento.medicamento')->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('receta.edit')->with([
        'receta'=>Receta::find($id),
        'enfermedades'=>Enfermedad::all(),
        'estudios'=>Estudio::all(),
        'medicamentos'=>Medicamento::all()
        ]);
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
        Receta::find($id)->update($request->all());
        return redirect()->route('receta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Receta::destroy($id);
        return redirect()->route('receta.index');
    }

    public function addMedicamento(Request $request)
    {        
        Receta::find($request->receta_id)->medicamentos()->attach($request->medicamento_id, ['dosis' => $request->dosis]);
        return redirect()->back();
    }

    public function rmvMedicamento($id, $medicamento_id)
    {
        Receta::find($id)->medicamentos()->detach($medicamento_id);
        return redirect()->back();;
    }

    public function addEnfermedad(Request $request)
    {        
        Receta::find($request->receta_id)->enfermedades()->attach($request->enfermedad_id);
        return redirect()->back();
    }

    public function rmvEnfermedad($id, $enfermedad_id)
    {
        Receta::find($id)->enfermedades()->detach($enfermedad_id);
        return redirect()->back();
    }

    public function addEstudio(Request $request)
    {
        Receta::find($request->receta_id)->estudios()->attach($request->estudio_id);
        return redirect()->back();
    }






}

