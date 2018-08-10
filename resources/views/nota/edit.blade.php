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
<h2 class="no-margin-bottom">Editar datos del medicamento</h2>
</div>
</header>
<section class="tables">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header d-flex align-items-center">
</div>
<div class="col-sm-12">
  <form action="{{route('nota.update', $nota->id)}}" method="POST">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
    <legend>Editar Consulta para {{$nota->consulta->paciente->nombreCompleto}}</legend>
     
    <input type="hidden" name="consulta_id" value="{{$nota->consulta_id}}">

    <textarea name="nota" rows="10" cols="40">Editar notas de la consulta</textarea>
    <div class="form-group">
      <button type="submit" class="btn btn-info">Editar</button>
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