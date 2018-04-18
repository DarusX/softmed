@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('paciente.update', ['Paciente' => $paciente->id])}}" method="post">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
    <legend>Paciente</legend>
  
  
    <div class="form-group">
      <label for="">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="{{$paciente->nombre}}">
    </div>
  
    <div class="form-group">
      <label for="">Componente activo</label>
      <input type="text" name="compuesto" class="form-control" value="{{$paciente->compuesto}}">
    </div>
  
    <div class="form-group">
      <label for="">Presentación</label>
      <input type="text" name="presentacion" class="form-control" value="{{$paciente->presentacion}}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Edit</button>
    </div>
  
  </form>
</div>
@endsection