@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <h1>
        <strong>Consultas</strong>
    </h1>
    <a href="{{route('home') }}" class="btn btn-info" role="button">Regresar</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-left">Paciente</th>
                <th class="text-left">Fecha</th>
                <th class="text-left">Hora</th>
                <th class="text-left">Edicion</th>
                <th class="text-left">Complementos</th>
            </tr>
        </thead>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 2c91217ea8c9cf669324083d04bcd6167962b69e
=======
>>>>>>> 2c91217ea8c9cf669324083d04bcd6167962b69e
=======
=======
>>>>>>> parent of 2c91217... Mejoras Consulta

        <tfoot>

        </tfoot>

<<<<<<< HEAD
>>>>>>> parent of 872c363... refresh con pull, implementacion de data tables y creacion de migracion para la tabla de tipo de usarios
=======
>>>>>>> parent of 2c91217... Mejoras Consulta
        <tbody>
            @foreach($consultas as $consulta)
            <tr>
                <td class="text-left">{{$consulta->paciente->nombreCompleto}}</td>
                <td class="text-left">{{ $consulta->fecha }}</td>
                <td class="text-left">{{ $consulta->hora }}</td>

                <td class="text-left">
                    <a href="{{ route('consulta.edit', $consulta)}}" class="btn btn-xs btn-default">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="" data-target="#modal-delete-{{$consulta->id}}" data-toggle="modal" class="btn btn-xs btn-default">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>

                <td class="text-left">
                    <a href="{{ route('create_Receta', ['consulta' => $consulta->id])}}" class="btn btn-xs btn-default">
                        <i class="fas fa-capsules"></i>
                    </a>
                </td>
                @include('consulta.modal')
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection