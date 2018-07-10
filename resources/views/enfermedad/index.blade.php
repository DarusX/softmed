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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
         
=======
>>>>>>> 2c91217ea8c9cf669324083d04bcd6167962b69e
=======
>>>>>>> 2c91217ea8c9cf669324083d04bcd6167962b69e
=======
         
         <tfoot>

    <th colspan=4> {{ $enfermedades->render() }} </th>
      
  </tfoot>
       
>>>>>>> parent of 872c363... refresh con pull, implementacion de data tables y creacion de migracion para la tabla de tipo de usarios
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

@endsection

@section('scripts')
<script> 
  $(".table").DataTable();
</script>
=======
>>>>>>> 2c91217ea8c9cf669324083d04bcd6167962b69e
=======
>>>>>>> 2c91217ea8c9cf669324083d04bcd6167962b69e
=======

>>>>>>> parent of 872c363... refresh con pull, implementacion de data tables y creacion de migracion para la tabla de tipo de usarios
@endsection