@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('medicamento.store')}}" method="post">
   {{ csrf_field()}}

  
    <legend>Crear Medicamento</legend>
  
  
    <div class="form-group {{$errors->has('nombre')? ' has-error':''}}">
      <label class="control-label" for="">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
    </div>
  
    <div class="form-group {{$errors->has('compuesto')? ' has-error':''}}">
      <label class="control-label" for="">Componente activo</label>
      <input type="text" name="compuesto" class="form-control" value="{{old('compuesto')}}">
    </div>
  
    <div class="form-group {{$errors->has('presentacion')? ' has-error':''}}">
      <label class="control-label" for="">Presentación</label>
      <input type="text" name="presentacion" class="form-control" value="{{old('presentacion')}}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>
  
  </form>

</div>
@endsection