@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <h1>
        <strong>Medicamentos</strong>
    </h1>
    <a href="{{route('medicamento.create')}}" class="btn btn-default">Nuevo</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Componente activo</th>
                <th>Presentacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicamentos as $medicamento)
            <tr>
                <td>{{ $medicamento->nombre }}</td>
                <td>{{ $medicamento->compuesto }}</td>
                <td>{{ $medicamento->presentacion }}</td>
                <td>
                    <a href="{{route('medicamento.edit', $medicamento)}}" class="btn btn-xs btn-default"><i class="fas fa-pen"></i></a>
                    <a href="{{route('medicamento.destroy', $medicamento)}}" class="btn btn-xs btn-danger destroy"><i class="fas fa-times"></i></a>
                </td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection