@extends('layouts.app') @section('content')
<div class="col-sm-12">
	<legend>Crear Consulta para {{$paciente->nombreCompleto}}</legend>
</div>
<div class="col-sm-12">
	<div class="row">
		<form action="{{route('consulta.store')}}" method="post">
			{{ csrf_field()}}

			<input type="hidden" name="paciente_id" value="{{$paciente->id}}">

			<div class="col-sm-6">
				<div class="form-group {{$errors->has('fecha')? ' has-error':''}}">
					<label class="control-label" for="">Fecha</label>
					<input type="text" name="fecha" class="form-control datepicker" value="{{old('fecha')}}" autocomplete="off">
				</div>
			</div>

			<div class="col-sm-6">
				<div class="form-group {{$errors->has('hora')? ' has-error':''}}">
					<label class="control-label" for="">Hora</label>
					<input type="time" name="hora" class="form-control" value="{{old('hora')}}">
				</div>
			</div>

			<div class="col-sm-12">
				<div class="form-group">
					<button type="submit" class="btn btn-info">Agendar</button>
					<a href="{{ URL::previous() }}" class="btn btn-danger" role="button">Cancelar</a>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection