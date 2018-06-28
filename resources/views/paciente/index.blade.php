@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Pacientes</strong>
    </h1>
    <a href="{{route('paciente.create')}}" class="btn btn-primary" role="button">Nuevo</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Fecha de nacimiento</th>
                <th>Curp</th>
                <th>Domicilio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nombreCompleto }}</td>
                <td>{{ $paciente->nacimiento }}</td>
                <td>{{ $paciente->curp }}</td>
                <td>{{ $paciente->domicilio }}</td>
                <td>
                    <a href="{{ route('paciente.edit', ['paciente' => $paciente->id])}}" class="btn btn-xs btn-default">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="" data-target="#modal-delete-{{$paciente->id}}" data-toggle="modal" class="btn btn-xs btn-default">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                    <a href="{{ route('create_Consulta', ['paciente' => $paciente->id])}}" class="btn btn-xs btn-default">
                        <i class="fas fa-calendar-alt"></i>
                    </a>
                    @include('paciente.modal') 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$pacientes->links()}}
</div>

@endsection