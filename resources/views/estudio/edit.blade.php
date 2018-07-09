@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
	<form action="{{route('estudio.update', $estudio)}}" method="post">
		{{ csrf_field()}} 
		{{ method_field('PUT')}}
		<legend>Editar Estudio</legend>
		<div class="form-group {{$errors->has('estudio')? ' has-error':''}}">
			<label class="control-label" for="">Estudio</label>
			<input type="text" name="estudio" class="form-control" value="{{$estudio->estudio}}">
		</div>
		<div class="form-group">
			<a href="{{ URL::previous() }}" class="btn btn-default">Regresar</a>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	</form>
</div>
@endsection