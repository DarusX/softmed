@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('receta.update', $receta->id)}}" method="post">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
    <legend>Editar Receta para {{$receta->consulta->paciente->nombreCompleto}}</legend>
  
  
    <div class="form-group {{$errors->has('fecha')? ' has-error':''}}">
      <label class="control-label" for="">Fecha</label>
      <input type="date" name="fecha" class="form-control" value="{{ $receta->fecha }}">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>

  </form>

</div>
@endsection