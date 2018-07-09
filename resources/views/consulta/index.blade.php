@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <h1>
        <strong>Consultas</strong>
    </h1>
    <a href="{{route('home') }}" class="btn btn-default">Regresar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 2c91217ea8c9cf669324083d04bcd6167962b69e
=======
>>>>>>> 2c91217ea8c9cf669324083d04bcd6167962b69e
        <tbody>
            @foreach($consultas as $consulta)
            <tr>
                <td>{{$consulta->paciente->nombreCompleto}}</td>
                <td>{{ $consulta->fecha }}</td>
                <td>{{ $consulta->hora }}</td>
                <td>
                    <a href="{{ route('consulta.edit', $consulta)}}" class="btn btn-xs btn-info"><i class="fas fa-pen"></i></a>
                    <a href="{{ route('consulta.destroy', $consulta)}}" class="btn btn-xs btn-danger"><i class="fas fa-times"></i></a>
                    <a href="{{ route('create_receta',$consulta)}}" class="btn btn-xs btn-success"><i class="fas fa-file"></i></a>
                </td>
                @include('consulta.modal')
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('scripts')
<script> 
  $(".table").DataTable();
</script>
@endsection