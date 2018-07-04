@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('enfermedad.store')}}" method="post">
   {{ csrf_field()}}

    <legend>Crear Enfermedad</legend>
  
  
    <div class="form-group {{$errors->has('enfermedad')? ' has-error':''}}">
      <label class="control-label" for="">Enfermedad</label>
      <input type="text" name="enfermedad" class="form-control" value="{{old('enfermedad')}}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
      <a href="{{ URL::previous() }}" class="btn btn-danger" role="button">Cancelar</a>
    </div>
  
  </form>
</div>
@endsection