@extends('layouts.app') @section('content')
<div class="col-sm-12">
  <form action="{{route('consulta.update', $consulta->id)}}" method="POST">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
    <legend>Editar Consulta para {{$consulta->paciente->nombreCompleto}}</legend>
     
    <input type="hidden" name="paciente_id" value="{{ $consulta->paciente_id }}">

    <div class="form-group {{$errors->has('fecha')? ' has-error':''}}">
      <label class="control-label" for="">Fecha</label>
      <input type="date" name="fecha" class="form-control" value="{{ $consulta->fecha }}">
    </div>
     
    <div class="form-group {{$errors->has('hora')? ' has-error':''}}">
      <label class="control-label" for="">Hora</label>
      <input type="time" name="hora" class="form-control" value="{{$consulta->hora}}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-info">Agendar</button>
      <a href="{{ URL::previous() }}" class="btn btn-danger" role="button">Cancelar</a>
    </div>
  
  </form>
</div>
@endsection