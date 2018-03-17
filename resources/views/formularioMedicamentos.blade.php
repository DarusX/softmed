@extends('layouts.app')
@section('content')


<form action="{{ route('indexMedicamentos')}}" method="POST">
  {{ csrf_field()}}

<div class="container">
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Formulario medicamento</h3>
  </div>
        <div class="panel-body">
        Nombre del medicamento
        <input type="text" name="nombre"  class="form-control" value="{{old('nombre')}}">
        </div>
    
        <div class="panel-body">
        Componente activo
        <input type="text" name="compuesto" class="form-control" value="{{old('compuesto')}}" >
        </div>

        <div class="panel-body">
        Presentacion
        <input type="text" name="presentacion" class="form-control" value="{{old('presentacion')}}" >
        </div>

        <div class="panel-body">
        <button type="submit" class="btn btn-info">Guardar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
       </div>

      </div>
    </div>
</form>
@endsection