<?php

namespace App\Http\Controllers;
use App\paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('paciente.index')->with([
            'pacientes' => Paciente::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');    }

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
            'paterno'=>'required',
            'materno'=>'required',
            'nacimiento'=>'required',
            'curp'=>'required',
            'domicilio'=>'required']);
        
        Paciente::create($request->all());
        return redirect()->route('paciente.index');
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
    public function edit(paciente $paciente)
    {
        return view('paciente.edit')->with([
        'paciente'=>$paciente]);
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
            'paterno'=>'required',
            'materno'=>'required',
            'nacimiento'=>'required',
            'curp'=>'required',
            'domicilio'=>'required']);

        Paciente::find($id)->update($request->all());
        return redirect()->route('paciente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paciente::destroy($id);
        return redirect()->route('paciente.index');
    }

    public function busqueda(Request $request)
    { 
        return view('paciente.index')->with([
            'pacientes' => Paciente::where('NombreCompleto', 'LIKE', '%' . $request . '%')
        ]);
    }
}
