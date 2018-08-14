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
                    <h2 class="no-margin-bottom">Recetas</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Paciente</th>
                                                    <th>Fecha</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($recetas as $receta)
                                                <tr>
                                                    <td>{{ $receta->consulta->paciente->nombreCompleto }}</td>
                                                    <td>{{ $receta->consulta->fecha }}</td>
                                                    <td>
                                                        <a href="{{ route('receta.edit', $receta)}}" class="btn btn-xs btn-primary">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="{{ route('receta.destroy', $receta)}}" class="btn btn-xs btn-danger destroy">
                                                            <i class="fas fa-times"></i>
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