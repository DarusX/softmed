@extends('layouts.app') @section('content')
<div class="col-sm-12">
  <legend>Crear Consulta para {{$paciente->nombreCompleto}}</legend>
  <form action="{{route('consulta.store')}}" method="post">
    {{ csrf_field()}}
    <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
    <div class="form-group {{$errors->has('fecha')? ' has-error':''}}">
      <label class="control-label" for="">Fecha</label>
      <input type="date" name="fecha" class="form-control" value="{{old('fecha')}}">
    </div>
    <div class="form-group {{$errors->has('hora')? ' has-error':''}}">
      <label class="control-label" for="">Hora</label>
      <input type="time" name="hora" class="form-control" value="{{old('hora')}}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-info">Agendar</button>
    </div>
  </form>
</div>
@endsection