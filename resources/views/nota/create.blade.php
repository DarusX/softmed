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
                    <div class="col-sm-12">

                        <form action="{{route('nota.store')}}" method="post">
                            {{ csrf_field()}}

                            <legend>Crear Nota</legend>

                            <input type="hidden" name="consulta_id" value="{{$consulta->id}}">

                            <textarea name="nota" rows="10" cols="40">Escribe aqui las notas relacionadas con la consulta</textarea>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Agregar</button>
                                <a href="{{ URL::previous() }}" class="btn btn-danger" role="button">Cancelar</a>
                            </div>

                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection