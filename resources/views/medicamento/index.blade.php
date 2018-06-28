@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <h1>
        <strong>Medicamentos</strong>
    </h1>
    <a href="{{route('medicamento.create')}}" class="btn btn-primary" role="button">Nuevo</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Componente activo</th>
                <th class="text-center">Presentacion</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tfoot>
        </tfoot>
        <tbody>
            @foreach($medicamentos as $medicamento)
            <tr>
                <td class="text-center">{{ $medicamento->nombre }}</td>
                <td class="text-center">{{ $medicamento->compuesto }}</td>
                <td class="text-center">{{ $medicamento->presentacion }}</td>
                <td class="text-center">
                    <a href="{{ route('medicamento.edit', ['medicamento' => $medicamento->id])}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="" data-target="#modal-delete-{{$medicamento->id}}" data-toggle="modal">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                    @include('medicamento.modal')
                </td>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $medicamentos->render() }}
</div>

@endsection