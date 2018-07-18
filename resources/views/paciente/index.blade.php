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
                    <h2 class="no-margin-bottom">Pacientes</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Pacientes</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Paciente</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pacientes as $paciente)
                                                <tr>
                                                    <td>{{ $paciente->nombreCompleto }}</td>
                                                    <td>
                                                        <a href="{{ route('paciente.edit', $paciente)}}" class="btn btn-xs btn-primary">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="{{ route('paciente.destroy', $paciente)}}" class="btn btn-xs btn-danger destroy">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                        <a href="{{ route('create_consulta', $paciente)}}" class="btn btn-xs btn-info">
                                                            <i class="fas fa-calendar-alt"></i>
                                                        </a>
                                                    </td>
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