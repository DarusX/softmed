@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Recetas</strong>
    </h1>
<a href="{{route('receta.create')}}" class="btn btn-primary" role="button">Nuevo</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Paciente</th>

            </tr>
        </thead>
         <tfoot>

    <th colspan=4> {{ $recetas->render() }} </th>
      
  </tfoot>
        <tbody>
            @foreach($recetas as $receta)
            <tr>
                <td class="text-center">{{ $receta->id }}</td>
                <td class="text-center">{{ $receta->fecha }}</td>
                <td class="text-center">{{ $receta->id_paciente }}</td>

                <a href="{{ route('receta.edit', ['receta' => $receta->id])}}" ><i class="fas fa-pencil-alt"></i></a>
                <a class="destroy" href="{{route('receta.destroy', $receta->id)}}"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection