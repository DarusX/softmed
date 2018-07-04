@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <h1>
        <strong>Medicamentos</strong>
    </h1>
    <a href="{{route('medicamento.create')}}" class="btn btn-default">Nuevo</a>
    <a href="{{route('home') }}" class="btn btn-default">Regresar</a>
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
                    <a href="{{route('medicamento.edit', $medicamento)}}" class="btn btn-info btn-xs"><i class="fas fa-pen"></i></a>
                    <a href="{{route('medicamento.destroy', $medicamento)}}" class="btn btn-danger btn-xs destroy"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $medicamentos->links() }}
</div>


@endsection