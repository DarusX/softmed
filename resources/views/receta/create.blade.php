@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('receta.store')}}" method="post">
   {{ csrf_field()}}

    <legend>Crear Receta</legend>
  
  
    <div class="form-group {{$errors->has('fecha')? ' has-error':''}}">
      <label class="control-label" for="">Fecha</label>
      <input type="date" name="fecha" class="form-control" value="{{old('fecha')}}">
    </div>
  
    <div class="form-group">
    </div>
  
  </form>
</div>
@endsection