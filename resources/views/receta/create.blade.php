@extends('layouts.app') @section('content')
<div class="page">
    @include('layouts.navbar')
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        @include('layouts.sidebar')
        <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
                <div class="container-fluid">
                    <h2 class="no-margin-bottom">Receta</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">{{$consulta->paciente->nombreCompleto}}</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('receta.store')}}" method="post">
                                        {{ csrf_field()}}
                                        <input type="hidden" name="consulta_id" value="{{$consulta->id}}">

                                        <div class="form-group {{$errors->has('fecha')? ' has-error':''}}">
                                            <label class="control-label" for="">Fecha</label>
                                            <input type="date" name="fecha" class="form-control" value="{{ $consulta->fecha }}">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Agendar</button>
                                            <a href="{{ URL::previous() }}" class="btn btn-danger" role="button">Cancelar</a>
                                        </div>

                                    </form>
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