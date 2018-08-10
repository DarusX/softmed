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
<h2 class="no-margin-bottom">Editar datos del paciente {{$paciente->nombreCompleto}}</h2>
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
  
  <form action="{{route('paciente.update', ['Paciente' => $paciente->id])}}" method="post">
   {{ csrf_field()}}
   {{ method_field('PUT')}}

    <div class="form-group {{$errors->has('nombre')? ' has-error':''}}">
      <label for="">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="{{$paciente->nombre}}">
    </div>
  
    <div class="form-group {{$errors->has('paterno')? ' has-error':''}}">
      <label for="">Apellido Paterno</label>
      <input type="text" name="paterno" class="form-control" value="{{$paciente->paterno}}">
    </div>
  
    <div class="form-group {{$errors->has('materno')? ' has-error':''}}">
      <label for="">Apellido Materno</label>
      <input type="text" name="materno" class="form-control" value="{{$paciente->materno}}">
    </div>
  
    <div class="form-group {{$errors->has('nacimiento')? ' has-error':''}}">
      <label for="">Fecha de Nacimiento</label>
      <input type="date" name="nacimiento" class="form-control" value="{{$paciente->nacimiento}}">
    </div>
  
    <div class="form-group {{$errors->has('curp')? ' has-error':''}}">
      <label for="">Clave Única de Registro de Poblacion (Curp)</label>
      <input type="text" name="curp" class="form-control" value="{{$paciente->curp}}">
    </div>
  
    <div class="form-group {{$errors->has('email')? ' has-error':''}}">
      <label for="">Correo Electronico</label>
      <input type="email" name="email" class="form-control" value="{{$paciente->email}}">
    </div>
    
    <div class="form-group {{$errors->has('domicilio')? ' has-error':''}}">
      <label for="">Domicilio</label>
      <input type="text" name="domicilio" class="form-control" value="{{$paciente->domicilio}}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
      <a href="{{ URL::previous() }}" class="btn btn-danger" role="button">Cancelar</a>
    </div>
  
  </form>
</div>
@endsection