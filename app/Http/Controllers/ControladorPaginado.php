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
//////////////////////////////////////////////////
public function MainMedicamentos()
   {
     $medicamentos = medicamento::orderBy('nombre', 'asc')->paginate(20);
   	return view('indexMedicamentos')->with(['medicamentos' => $medicamentos]);
   }
////////////////////////////////////////////////////////

public function formMedicamentos()
   {
      return view('formularioMedicamentos');
   }
//////////////////////////////////////////////////////////
public function store(createMedicamentoRequest $request)
{
   $medicamento = medicamento::create($request->only('nombre', 'compuesto', 'presentacion'));

   return redirect()->route('indexMedicamentos');
   dd($request->all());
}
///////////////////////////////////////////////////
public function delete(medicamento $medicamento)
{
   $medicamento->delete();
   return redirect()->route('indexMedicamentos');
}
///////////////////////////////////////////////////////////////////
public function update(medicamento $medicamento, Request $request)
{
   $medicamento->update(
      $request->only('nombre','compuesto', 'presentacion')
   );
}


}
