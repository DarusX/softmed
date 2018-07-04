@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Enfermedades</strong>
    </h1>
    <a href="{{route('enfermedad.create')}}" class="btn btn-primary" role="button">Nuevo</a>
    <a href="{{route('home') }}" class="btn btn-info" role="button">Regresar</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Enfermedad</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
         
         <tfoot>

    <th colspan=4> {{ $enfermedades->render() }} </th>
      
  </tfoot>
       
        <tbody>
            @foreach($enfermedades as $enfermedad)
            <tr>
                <td class="text-center">{{ $enfermedad->id }}</td>
                <td class="text-center">{{ $enfermedad->enfermedad }}</td>
                <td class="text-center">
                <a href="{{ route('enfermedad.edit', ['enfermedad' => $enfermedad->id])}}" class="btn btn-xs btn-default"><i class="fas fa-pencil-alt"></i></a>
                <a href="" data-target="#modal-delete-{{$enfermedad->id}}" data-toggle="modal" class="btn btn-xs btn-default"><i class="fas fa-trash-alt"></i></a>                
            @include('enfermedad.modal')
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection