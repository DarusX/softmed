@extends('layouts.app') 
@section('content')
<div class="page">
@include('layouts.navbar')
<div class="page-content d-flex align-items-stretch">
<!-- Side Navbar -->
@include('layouts.sidebar')
<div class="content-inner">
<!-- Page Header-->
<header class="page-header">
<div class="container-fluid">
<h2 class="no-margin-bottom">Re-Agendar Consulta para {{$consulta->paciente->nombreCompleto}}</h2>
</div>
</header>
<section class="tables">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="card">

  <div class="col-sm-12">
  <form action="{{route('consulta.update', $consulta->id)}}" method="POST">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
     
    <input type="hidden" name="paciente_id" value="{{ $consulta->paciente_id }}">

    <div class="form-group {{$errors->has('fecha')? ' has-error':''}}">
      <label class="control-label" for="">Fecha</label>
      <input type="date" name="fecha" class="form-control" value="{{ $consulta->fecha }}">
    </div>
     
      <div class="form-group">
        <select id="hora" name="hora_id" class="select2 form-control">
           @foreach($Horas as $hora)
            <option value="{{$hora->id}}"> {{$hora->hora}} </option>
           @endforeach
         </select>
      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-info">Agendar</button>
      <a href="{{ URL::previous() }}" class="btn btn-danger" role="button">Cancelar</a>
    </div>
  
  </form>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection