@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('receta.store')}}" method="post">
   {{ csrf_field()}}

<legend>Crear Receta para {{$consulta->paciente->nombreCompleto}}</legend>
  
  
     
    <input type="hidden" name="consulta_id" value="{{$consulta->id}}">  
  
    <div class="form-group {{$errors->has('fecha')? ' has-error':''}}">
      <label class="control-label" for="">Fecha</label>
      <input type="date" name="fecha" class="form-control" value="{{ $consulta->fecha }}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Agendar</button>
    </div>
  
  </form>
</div>
@endsection