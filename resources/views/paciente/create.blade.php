@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('paciente.store')}}" method="post">
   {{ csrf_field()}}

  
    <legend>Crear Paciente</legend>

  
  
    <div class="form-group {{$errors->has('nombre')? ' has-error':''}}">
      <label class="control-label" for="">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
    </div>
  
   
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>
 
  </form>

</div>
@endsection
