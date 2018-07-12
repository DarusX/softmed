@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Estudios</strong>
    </h1>
    <a href="{{route('estudio.create')}}" class="btn btn-default">Nuevo</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Estudio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($estudios as $estudio)
            <tr>
                <td>{{ $estudio->estudio }}</td>
                <td>
                    <a href="{{ route('estudio.edit', $estudio)}}" class="btn btn-xs btn-default"><i class="fas fa-pen"></i></a>
                    <a href="{{ route('estudio.destroy', $estudio)}}" class="btn btn-xs btn-danger destroy"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection