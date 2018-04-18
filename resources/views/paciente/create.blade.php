@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('paciente.store')}}" method="post">
   {{ csrf_field()}}

  
    <legend>Paciente</legend>
  
  
    <div class="form-group">
      <label for="">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
    </div>
  
    <div class="form-group">
      <label for="">Componente activo</label>
      <input type="text" name="compuesto" class="form-control" value="{{old('compuesto')}}">
    </div>
  
    <div class="form-group">
      <label for="">Presentación</label>
      <input type="text" name="presentacion" class="form-control" value="{{old('presentacion')}}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>
  
  </form>
</div>
@endsection