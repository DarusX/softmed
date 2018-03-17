@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <h1>
        <strong>Medicamentos</strong>
    </h1>
    <a href="{{route('medicamento.create')}}" class="btn btn-primary" role="button">Nuevo</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Componente activo</th>
                <th class="text-center">Presentacion</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicamentos as $medicamento)
            <tr>
                <td class="text-center">{{ $medicamento->id }}</td>
                <td class="text-center">{{ $medicamento->nombre }}</td>
                <td class="text-center">{{ $medicamento->compuesto }}</td>
                <td class="text-center">{{ $medicamento->presentacion }}</td>


                <td class="text-center">
                    <a href="#" class="btn btn-success btn-sm" role="button">Editar</a>
                    <form action="{{route('delete_medicamento', ['medicamento' => $medicamento->id])}}" method="POST">
                        {{ csrf_field()}} {{ method_field('DELETE') }}
                        <button type="submit" class='btn btn-danger'>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection