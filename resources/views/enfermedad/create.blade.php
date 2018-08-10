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
<h2 class="no-margin-bottom">Añadir Enfermedad</h2>
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
  
  <form action="{{route('enfermedad.store')}}" method="post">
   {{ csrf_field()}}
   
    <div class="form-group {{$errors->has('enfermedad')? ' has-error':''}}">
      <label class="control-label" for="">Enfermedad</label>
      <input type="text" name="enfermedad" class="form-control" value="{{old('enfermedad')}}">
    </div>
  
    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
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