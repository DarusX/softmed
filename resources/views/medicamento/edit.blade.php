@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
	<form action="{{route('medicamento.update', $medicamento)}}" method="post">
		{{ csrf_field()}} 
		{{ method_field('PUT')}}
		<legend>Editar Medicamento</legend>
		<div class="form-group {{$errors->has('nombre')? ' has-error':''}}">
			<label class="control-label" for="">Nombre</label>
			<input type="text" name="nombre" class="form-control" value="{{$medicamento->nombre}}">
		</div>
		<div class="form-group {{$errors->has('compuesto')? ' has-error':''}}">
			<label class="control-label" for="">Componente activo</label>
			<input type="text" name="compuesto" class="form-control" value="{{$medicamento->compuesto}}">
		</div>
		<div class="form-group {{$errors->has('presentacion')? ' has-error':''}}">
			<label class="control-label" for="">Presentación</label>
			<input type="text" name="presentacion" class="form-control" value="{{$medicamento->presentacion}}">
		</div>
		<div class="form-group">
			<a href="{{ URL::previous() }}" class="btn btn-default" role="button">Cancelar</a>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	</form>
</div>
@endsection