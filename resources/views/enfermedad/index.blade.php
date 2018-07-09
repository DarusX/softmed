@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Enfermedades</strong>
    </h1>
    <a href="{{route('home') }}" class="btn btn-default">Regresar</a>
    <a href="{{route('enfermedad.create')}}" class="btn btn-primary">Nuevo</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Enfermedad</th>
                <th>Acciones</th>
            </tr>
        </thead>
<<<<<<< HEAD
         
=======
>>>>>>> 2c91217ea8c9cf669324083d04bcd6167962b69e
        <tbody>
            @foreach($enfermedades as $enfermedad)
            <tr>
                <td>{{ $enfermedad->enfermedad }}</td>
                <td>
                    <a href="{{ route('enfermedad.edit',$enfermedad)}}" class="btn btn-xs btn-info"><i class="fas fa-pen"></i></a>
                    <a href="{{ route('enfermedad.destroy',$enfermedad)}}" class="btn btn-xs btn-danger destroy"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<<<<<<< HEAD

@endsection

@section('scripts')
<script> 
  $(".table").DataTable();
</script>
=======
>>>>>>> 2c91217ea8c9cf669324083d04bcd6167962b69e
@endsection