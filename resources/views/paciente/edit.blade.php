@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('paciente.update', ['Paciente' => $paciente->id])}}" method="post">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
    <legend>Editar Paciente</legend>
  
  
<div class="form-group">
      <label for="">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="{{$paciente->nombre}}">
    </div>
  
    <div class="form-group">
      <label for="">Apellido Paterno</label>
      <input type="text" name="paterno" class="form-control" value="{{$paciente->paterno}}">
    </div>
  
    <div class="form-group">
      <label for="">Apellido Materno</label>
      <input type="text" name="materno" class="form-control" value="{{$paciente->materno}}">
    </div>
  
   <div class="form-group">
      <label for="">Fecha de Nacimiento</label>
      <input type="date" name="nacimiento" class="form-control" value="{{$paciente->nacimiento}}">
    </div>
  
    <div class="form-group">
      <label for="">Clave Única de Registro de Poblacion (Curp)</label>
      <input type="text" name="curp" class="form-control" value="{{$paciente->curp}}">
    </div>
  
    <div class="form-group">
      <label for="">Domicilio</label>
      <input type="text" name="domicilio" class="form-control" value="{{$paciente->domicilio}}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>
  
  </form>
</div>
@endsection