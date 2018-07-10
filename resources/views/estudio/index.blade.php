@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Estudios</strong>
    </h1>
    <a href="{{route('estudio.create')}}" class="btn btn-primary" role="button">Nuevo</a>
    <a href="{{route('home') }}" class="btn btn-info" role="button">Regresar</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Estudio</th>
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

    <th colspan=4> {{ $estudios->render() }} </th>
      
  </tfoot>
       
>>>>>>> parent of 872c363... refresh con pull, implementacion de data tables y creacion de migracion para la tabla de tipo de usarios
        <tbody>
            @foreach($estudios as $estudio)
            <tr>
                <td class="text-center">{{ $estudio->id }}</td>
                <td class="text-center">{{ $estudio->estudio }}</td>
                <td class="text-center">
                <a href="{{ route('estudio.edit', ['estudio' => $estudio->id])}}" class="btn btn-xs btn-default"><i class="fas fa-pencil-alt"></i></a>
                <a href="" data-target="#modal-delete-{{$estudio->id}}" data-toggle="modal" class="btn btn-xs btn-default"><i class="fas fa-trash-alt"></i></a>                
            @include('estudio.modal')
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
@endsection
=======
@endsection
>>>>>>> parent of 872c363... refresh con pull, implementacion de data tables y creacion de migracion para la tabla de tipo de usarios
