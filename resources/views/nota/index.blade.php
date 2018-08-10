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
                    <h2 class="no-margin-bottom">Notas</h2>
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
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="MyTable">
                                    <thead>
                                    <tr>
                                    <th class="text-left">Fecha</th>
                                    <th class="text-left">Hora</th>
                                    <th class="text-left">Nota</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($notas as $nota)
                                    <tr>
                                    <td class="text-left">{{ $nota->consulta->fecha }}</td>
                                    <td class="text-left">{{ $nota->consulta->hora->hora }}</td>
                                    <td class="text-left">{{ $nota->nota }}</td>
                                    <td class="text-center">
                                    <a href="{{ route('nota.edit', $nota)}}" class="btn btn-xs btn-default"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('nota.destroy', $nota)}}" class="btn btn-xs btn-danger destroy"><i class="fas fa-times"></i></a>
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

