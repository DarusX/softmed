<?php

namespace App\Http\Controllers;
use App\estudio;
use Illuminate\Http\Request;
use App\http\requests\createEstudioRequest;
use App\http\requests\EditEstudioRequest;

class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $estudios = estudio::orderBy('id', 'asc')->paginate(20);
    return view('estudio.index')->with(['estudios' => $estudios]);
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
    public function store(createEstudioRequest $request)
    {
        $estudio = Estudio::create ($request->only('estudio'));
        return redirect()->route('indexEstudios');    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(estudio $estudio)
    {
        return view('estudio.edit')->with(['estudio'=>$estudio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(estudio $estudio, EditEstudioRequest $request)
    {
      $estudio->update(
      $request->only('estudio')
   );

   return redirect()->route('indexEstudios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(estudio $estudio)
    {
 $estudio->delete();
   return redirect()->route('indexEstudios');
    }
}
