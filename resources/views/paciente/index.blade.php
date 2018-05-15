@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <h1>
        <strong>Pacientes</strong>
    </h1>
    <a href="{{route('paciente.create')}}" class="btn btn-primary" role="button">Nuevo</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-left">Paciente</th>
                <th class="text-left">Fecha de nacimiento</th>
                <th class="text-left">Curp</th>
                <th class="text-left">Domicilio</th>
            </tr>
        </thead>
         <tfoot>

    <th colspan=4> {{ $pacientes->render() }} </th>
      
  </tfoot>
        <tbody>
            @foreach($pacientes as $paciente)
            <tr>
                <td class="text-left">{{ $paciente->nombreCompleto }}</td>
                <td class="text-left">{{ $paciente->nacimiento }}</td>
                <td class="text-left">{{ $paciente->curp }}</td>
                <td class="text-left">{{ $paciente->domicilio }}</td>
                <td class="text-left">
                <a href="{{ route('paciente.edit', ['paciente' => $paciente->id])}}" class="btn btn-xs btn-default"><i class="fas fa-pencil-alt"></i></a>
                <a href="" data-target="#modal-delete-{{$paciente->id}}" data-toggle="modal" class="btn btn-xs btn-default"><i class="fas fa-trash-alt"></i></a>
                <a href="{{ route('create_Consulta', ['paciente' => $paciente->id])}}" class="btn btn-xs btn-default"><i class="fas fa-calendar-plus"></i></a>                
            @include('paciente.modal')                
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection