<?php

namespace App\Http\Controllers;
use App\medicamento;
use Illuminate\Http\Request;
use App\http\requests\createMedicamentoRequest;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function MainMedicamentos()
   {
     $medicamentos = medicamento::orderBy('id', 'asc')->paginate(20);
    return view('indexMedicamentos')->with(['medicamentos' => $medicamentos]);
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function store(createMedicamentoRequest $request)
{
   $medicamento = medicamento::create($request->only('nombre', 'compuesto', 'presentacion'));

   return redirect()->route('indexMedicamentos');
   dd($request->all());
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
public function update(medicamento $medicamento, Request $request)
{
   $medicamento->update(
      $request->only('nombre','compuesto', 'presentacion')
   );
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function delete(medicamento $medicamento)
{
   $medicamento->delete();
   return redirect()->route('indexMedicamentos');
}
}
