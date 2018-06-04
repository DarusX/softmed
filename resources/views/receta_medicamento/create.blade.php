@extends('layouts.app') @section('content')
<div class="col-sm-12">
    
    <form action="{{route('receta_medicamento.store')}}" method="post">
     {{ csrf_field()}}

    <legend>Agregar medicamentacion a la receta</legend>
  
  
     
    <input type="hidden" name="receta_id" value="{{$receta->id}}">

	<select name="medicamento_id">
	 @foreach($medicamentos as $medicamento)
   	<option  value="{{$medicamento->id}}"> {{ $medicamento->nombre }} </option>
 	@endforeach
	</select>
    
   <div class="form-group {{$errors->has('dosis')? ' has-error':''}}">
      <label class="control-label" for="">Dosis</label>
      <input type="text" name="dosis" class="form-control" value="{{old('dosis')}}">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-info">Agregar</button>
    </div>
  
  </form>
</div>
@endsection