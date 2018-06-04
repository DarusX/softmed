@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Consultas</strong>
    </h1>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-left">Paciente</th>
                <th class="text-left">Fecha</th>
                <th class="text-left">Hora</th>
                <th class="text-left">Edicion</th>
                <th class="text-left">Complementos</th>
            </tr>
        </thead>
         
         <tfoot>

    <th colspan=4> {{ $consultas->render() }} </th>
      
  </tfoot>
       
        <tbody>
            @foreach($consultas as $consulta)
            <tr>
                <td class="text-left">{{$consulta->paciente->nombreCompleto}}</td>
                <td class="text-left">{{ $consulta->fecha }}</td>
                <td class="text-left">{{ $consulta->hora }}</td>
               
                <td class="text-left">
                <a href="{{ route('consulta.edit', $consulta)}}" class="btn btn-xs btn-default"><i class="fas fa-pencil-alt"></i></a>
                <a href="" data-target="#modal-delete-{{$consulta->id}}" data-toggle="modal" class="btn btn-xs btn-default"><i class="fas fa-trash-alt"></i></a>
                </td>
               
               <td class="text-left">
                <a href="{{ route('create_Nota', ['consulta' => $consulta->id])}}" class="btn btn-xs btn-default"><i class="fas fa-sticky-note"></i></a>
                <a href="{{ route('create_Receta', ['consulta' => $consulta->id])}}" class="btn btn-xs btn-default"><i class="fas fa-capsules"></i></a>
                </td>
                @include('consulta.modal')
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection