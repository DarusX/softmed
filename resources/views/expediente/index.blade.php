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
                    <h2 class="no-margin-bottom">Notas del paciente</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
           <section>
           @foreach($consultas as $consulta)
           @if(isset($consulta->nota))
           <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">{{$consulta->fecha}}</h3>
                    </div>
                    <div class="card-body">
                      <p> {!!$consulta->nota->nota!!}</p>
                    </div>
                  </div>
                </div>
                @else
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">{{$consulta->fecha}}</h3>
                    </div>
                    <div class="card-body">
                      <p><a href="{{route('create_Nota', $consulta)}}" class="btn btn-xs btn-default"><i class="fas fa-notes-medical"></i>Crear Nota</a></p>
                    </div>

                                    @endisset
                @endforeach
            </section>
        </div>
    </div>
</div>
@endsection