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
                    <h2 class="no-margin-bottom">Medicamentos</h2>
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
                                <div class="card-header d-flex align-items-center">
                                    <a href="{{route('medicamento.create')}}" class="btn btn-default">Nuevo medicamento</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>Nombre</th>
                                        <th>Componente activo</th>
                                        <th>Presentacion</th>
                                        <th>Acciones</th>
                                        </tr>
                                     </thead>
                                    <tbody>
                                        @foreach($medicamentos as $medicamento)
                                            <tr>
                                            <td>{{ $medicamento->nombre }}</td>
                                            <td>{{ $medicamento->compuesto }}</td>
                                            <td>{{ $medicamento->presentacion }}</td>
                                            <td>
                                            <a href="{{route('medicamento.edit', $medicamento)}}" class="btn btn-xs btn-default"><i class="fas fa-pen"></i></a>
                                            <a href="{{route('medicamento.destroy', $medicamento)}}" class="btn btn-xs btn-danger destroy"><i class="fas fa-times"></i></a>
                                            </td>
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