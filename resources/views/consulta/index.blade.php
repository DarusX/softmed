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
                    <h2 class="no-margin-bottom">Consultas</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Consultas</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Paciente</th>
                                                    <th>Fecha</th>
                                                    <th>Hora</th>
                                                    <th>Edicion</th>
                                                    <th>Complementos</th>
                                                </tr>
                                            </thead>
                                    
                                            <tbody>
                                                @foreach($consultas as $consulta)
                                                <tr>
                                                    <td>{{$consulta->paciente->nombreCompleto}}</td>
                                                    <td>{{ $consulta->fecha }}</td>
                                                    <td>{{ $consulta->hora->hora }}</td>
                                                    <td>
                                                        <a href="{{ route('consulta.edit', $consulta)}}" class="btn btn-xs btn-primary">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="{{ route('consulta.destroy', $consulta)}}" class="btn btn-xs btn-danger destroy">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('create_Receta', $consulta)}}" class="btn btn-xs btn-info">
                                                            <i class="fas fa-capsules"></i>
                                                        </a>
                                                    </td>
                                                    @include('consulta.modal')
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection