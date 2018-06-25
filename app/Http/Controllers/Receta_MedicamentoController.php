<?php

namespace App\Http\Controllers;
use App\receta;
use App\medicamento;
use App\receta_medicamento;
use Illuminate\Http\Request;

class Receta_MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('receta_medicamento.index')->with([
            'recetas_medicamentos' => Receta_Medicamento::paginate(20)
            ]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('receta_medicamento.create')->with([
        'receta'=> Receta::find($id),
        'medicamentos'=> Medicamento::all()
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
        //receta_medicamento::create($request->all());
        Receta::find($request->receta_id)->medicamentos()->attach($request->medicamento_id, ['dosis' => $request->dosis]);
        return redirect()->back();
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Receta_Medicamento::destroy($id);
        return redirect()->back();

    }
}
