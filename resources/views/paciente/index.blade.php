@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <h1>
        <strong>Pacientes</strong>
    </h1>
    <a href="{{route('paciente.create')}}" class="btn btn-primary" role="button">Nuevo</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Apellido Paterno</th>
                <th class="text-center">Apellido Materno</th>
                <th class="text-center">Fecha de nacimiento</th>
                <th class="text-center">Curp</th>
                <th class="text-center">Domicilio</th>
            </tr>
        </thead>
         <tfoot>

    <th colspan=4> {{ $pacientes->render() }} </th>
      
  </tfoot>
        <tbody>
            @foreach($pacientes as $paciente)
            <tr>
                <td class="text-center">{{ $paciente->id }}</td>
                <td class="text-center">{{ $paciente->nombre }}</td>
                <td class="text-center">{{ $paciente->paterno }}</td>
                <td class="text-center">{{ $paciente->materno }}</td>
                <td class="text-center">{{ $paciente->nacimiento }}</td>
                <td class="text-center">{{ $paciente->curp }}</td>
                <td class="text-center">{{ $paciente->domicilio }}</td>


                <td class="text-center">
                    <a href="{{route('paciente.edit', ['paciente' => $paciente->id])}}" class="btn btn-success btn-sm" role="button">Editar</a>
                    <form action="{{route('paciente.destroy', ['paciente' => $paciente->id])}}" method="POST">
                        {{ csrf_field()}} {{ method_field('DELETE') }}
                        <button type="submit" class='btn btn-danger'>Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection