@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('medicamento.update', ['Medicamento' => $medicamento->id])}}" method="post">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
    <legend>Editar Medicamento</legend>
  
  
    <div class="form-group {{$errors->has('nombre')? ' has-error':''}}">
      <label class="control-label" for="">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="{{$medicamento->nombre}}">
    </div>
  
    <div class="form-group {{$errors->has('compuesto')? ' has-error':''}}">
      <label class="control-label" for="">Componente activo</label>
      <input type="text" name="compuesto" class="form-control" value="{{$medicamento->compuesto}}">
    </div>
  
    <div class="form-group {{$errors->has('presentacion')? ' has-error':''}}">
      <label class="control-label" for="">Presentación</label>
      <input type="text" name="presentacion" class="form-control" value="{{$medicamento->presentacion}}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>
  
  </form>
</div>
@endsection