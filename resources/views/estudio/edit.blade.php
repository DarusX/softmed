@extends('layouts.app') @section('content')
<div class="col-sm-12">
  
  <form action="{{route('update_estudio', ['estudio' => $estudio->id])}}" method="post">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
    <legend>Medicamento</legend>
  
  
    <div class="form-group">
      <label for="">Estudio</label>
      <input type="text" name="estudio" class="form-control" value="{{$estudio->estudio}}">
    </div>
 
  <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>
 
  </form>
</div>
@endsection