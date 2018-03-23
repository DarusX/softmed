<?php

namespace App\Http\Controllers;
use App\medicamento;
use Illuminate\Http\Request;
use App\http\requests\createMedicamentoRequest;
use App\http\requests\updateMedicamentoRequest;


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
    return view('medicamento.index')->with(['medicamentos' => $medicamentos]);
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
    public function store(createMedicamentoRequest $request)
    {
        $medicamento = Medicamento::create ($request->only('nombre','compuesto','presentacion'));
        return redirect()->route('indexMedicamentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamento $medicamento)
    {
        return view('medicamento.edit')->with(['medicamento'=>$medicamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function update(medicamento $medicamento, UpdateMedicamentoRequest $request)
{
   $medicamento->update(
      $request->only('nombre','compuesto', 'presentacion')
   );

   return redirect()->route('indexMedicamentos');
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
