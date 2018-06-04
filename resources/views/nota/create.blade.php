@extends('layouts.app') @section('content')
<div class="col-sm-12">
    
    <form action="{{route('nota.store')}}" method="post">
     {{ csrf_field()}}

    <legend>Crear Nota</legend>
  
  
     
    <input type="hidden" name="consulta_id" value="{{$consulta->id}}">

    <textarea name="nota" rows="10" cols="40">Escribe aqui las notas relacionadas con la consulta</textarea>

    <div class="form-group">
      <button type="submit" class="btn btn-info">Agregar</button>
    </div>
  
  </form>
</div>
@endsection