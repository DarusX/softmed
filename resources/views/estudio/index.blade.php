@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <h1>
        <strong>Estudios</strong>
    </h1>
   <a href="{{route('create_estudio')}}" class="btn btn-primary" role="button">Nuevo</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Estudio</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
         
        <tbody>
            @foreach($estudios as $estudio)
            <tr>
                <td class="text-center">{{ $estudio->id }}</td>
                <td class="text-center">{{ $estudio->estudio }}</td>
                <td class="text-center">
                    <a href="{{ route('edit_estudio', ['estudio' => $estudio->id])}}" class="btn btn-success btn-sm" role="button">Editar</a>
                    <form action="{{route('delete_estudio', ['estudio' => $estudio->id])}}" method="POST">
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