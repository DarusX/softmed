@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Recetas</strong>
    </h1>
    <a href="{{route('home') }}" class="btn btn-info" role="button">Regresar</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Paciente</th>
                <th class="text-left">Edicion</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($recetas as $receta)
            <tr>
                <td class="text-center">{{ $receta->id }}</td>
                <td class="text-center">{{ $receta->consulta->start_date }}</td>
                <td class="text-center">{{ $receta->consulta->paciente->nombreCompleto }}</td>
                <td class="text-left">
                <a href="{{ route('receta.edit', ['receta' => $receta->id])}}" class="btn btn-xs btn-default"><i class="fas fa-pencil-alt"></i></a>
                <a href="" data-target="#modal-delete-{{$receta->id}}" data-toggle="modal" class="btn btn-xs btn-default"><i class="fas fa-trash-alt"></i></a>
                </td>
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