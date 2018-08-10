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
                    <h2 class="no-margin-bottom">Enfermedades</h2>
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
                                    <a href="{{route('enfermedad.create')}}" class="btn btn-default">Nueva Enfermedad</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>Enfermedad</th>
                                        <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($enfermedades as $enfermedad)
                                        <tr>
                                        <td>{{ $enfermedad->enfermedad }}</td>
                                        <td>   
                                        <a href="{{ route('enfermedad.edit', $enfermedad)}}" class="btn btn-xs btn-default"><i class="fas fa-pen"></i></a>
                                        <a href="{{ route('enfermedad.destroy', $enfermedad)}}" class="btn btn-xs btn-danger destroy"><i class="fas fa-times"></i></a>
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