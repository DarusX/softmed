@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('estudio.store')}}" method="post">
   {{ csrf_field()}}

    <legend>Crear Estudio</legend>
  
  
    <div class="form-group {{$errors->has('estudio')? ' has-error':''}}">
      <label class="control-label" for="">Estudio</label>
      <input type="text" name="estudio" class="form-control" value="{{old('estudio')}}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>
  
  </form>
</div>
@endsection