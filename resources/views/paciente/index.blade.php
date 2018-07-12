@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Pacientes</strong>
    </h1>
    <a href="{{route('paciente.create')}}" class="btn btn-default" role="button">Nuevo</a>
    <table class="table table-striped">
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
                    <a href="{{ route('paciente.edit', $paciente)}}" class="btn btn-xs btn-default"><i class="fas fa-pen"></i></a>
                    <a href="{{ route('paciente.destroy', $paciente)}}" class="btn btn-xs btn-danger"><i class="fas fa-times"></i></a>
                    <a href="{{ route('create_consulta', $paciente)}}" class="btn btn-xs btn-default"><i class="fas fa-calendar-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
