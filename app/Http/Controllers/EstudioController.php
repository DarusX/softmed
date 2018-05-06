<?php

namespace App\Http\Controllers;
use App\estudio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estudio.index')->with([
            'estudios' => Estudio::paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('estudio.create');
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
            'estudio'=>'required']);

        Estudio::create($request->all());
        return redirect()->route('estudio.index');    
    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(estudio $estudio)
    {
        return view('estudio.edit')->with([
            'estudio'=>$estudio]);
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
            'estudio'=>'required']);

        Estudio::find($id)->update($request->all());
        return redirect()->route('estudio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Estudio::destroy($id);
        return redirect::route('estudio.index');
        
    }

    //Crear metodo show porque no ejecuta la funcion destroy en forma de icono :D
     public function show($id)
    {
    
    }
}