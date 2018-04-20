@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('paciente.store')}}" method="post">
   {{ csrf_field()}}

  
    <legend>Crear Paciente</legend>

  
  
    <div class="form-group {{$errors->has('nombre')? ' has-error':''}}">
      <label class="control-label" for="">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
    </div>
  
    <div class="form-group {{$errors->has('paterno')? ' has-error':''}}">
      <label class="control-label" for="">Apellido Paterno</label>
      <input type="text" name="paterno" class="form-control" value="{{old('paterno')}}">
    </div>
  
    <div class="form-group {{$errors->has('materno')? ' has-error':''}}">
      <label class="control-label" for="">Apellido Materno</label>
      <input type="text" name="materno" class="form-control" value="{{old('materno')}}">
    </div>
  
    <div class="form-group {{$errors->has('nacimiento')? ' has-error':''}}">
      <label class="control-label" for="">Fecha de Nacimiento</label>
      <input type="text" name="nacimiento" class="form-control" value="{{old('nacimiento')}}">
    </div>
  
    <div class="form-group {{$errors->has('curp')? ' has-error':''}}">
      <label class="control-label" for="">Clave Única de Registro de Poblacion (Curp)</label>
      <input type="text" name="curp" class="form-control" value="{{old('curp')}}">
    </div>
  
    <div class="form-group {{$errors->has('domicilio')? ' has-error':''}}">
      <label class="control-label" for="">Domicilio</label>
      <input type="text" name="domicilio" class="form-control" value="{{old('domicilio')}}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>
 
  </form>

</div>
@endsection
