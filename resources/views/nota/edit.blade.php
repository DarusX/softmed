@extends('layouts.app') @section('content')
<div class="col-sm-12">
  <form action="{{route('nota.update', $nota->id)}}" method="POST">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
    <legend>Editar Consulta para {{$nota->consulta->paciente->nombreCompleto}}</legend>
     
    <input type="hidden" name="consulta_id" value="{{$nota->consulta_id}}">

    <textarea name="nota" rows="10" cols="40">Editar notas de la consulta</textarea>
    <div class="form-group">
      <button type="submit" class="btn btn-info">Editar</button>
      <a href="{{ URL::previous() }}" class="btn btn-danger" role="button">Cancelar</a>
    </div>
  
  </form>
</div>
@endsection