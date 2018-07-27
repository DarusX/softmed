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
                    <h2 class="no-margin-bottom">Expediente</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Expediente del paciente </h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>Hora</th>
                                                    <th>Consulta</th>
                                                    <th>Receta</th>
                                                </tr>
                                            </thead>
                                    
                                            <tbody>
                                                @foreach($consultas as $consulta)
                                                <tr>
                                                    <td>{{ $consulta->fecha }}</td>
                                                    <td>{{ $consulta->hora->hora }}</td>
                                                    <td>
                                                        <a href="{{ route('consulta.edit', $consulta)}}" class="btn btn-xs btn-primary">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="{{ route('consulta.destroy', $consulta)}}" class="btn btn-xs btn-danger">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                    <a href="{{ route('receta.edit', ['receta' => $consulta])}}" class="btn btn-xs btn-default"><i class="fas fa-eye"></i></a>                                                        </a>
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