<?php

namespace App\Http\Controllers;
use App\medicamento;
use Illuminate\Http\Request;


class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {
     return view('medicamento.index')->with([
            'medicamentos' => Medicamento::paginate(20)
        ]);
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamento.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre'=>'required',
            'compuesto'=>'required',
            'presentacion'=>'required']);
        
        Medicamento::create($request->all());
        return redirect()->route('medicamento.index');
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(medicamento $medicamento)
    {
        return view('medicamento.edit')->with([
        'medicamento'=>$medicamento]);
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
        $this->validate($request,[
            'nombre'=>'required',
            'compuesto'=>'required',
            'presentacion'=>'required']);
        
        Medicamento::find($id)->update($request->all());
        return redirect()->route('medicamento.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicamento::destroy($id);
        return redirect()->route('medicamento.index');
    }

    public function show($id)
    {
        //////////////////////////////////////////////////
    }
}
