@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('enfermedad.update', $enfermedad->id)}}" method="post">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
    <legend>Editar Enfermedad</legend>
  
  
    <div class="form-group {{$errors->has('enfermedad')? ' has-error':''}}">
      <label class="control-label" for="">Enfermedad</label>
      <input type="text" name="enfermedad" class="form-control" value="{{$enfermedad->enfermedad}}">
    </div>
 
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>

  </form>

</div>
@endsection