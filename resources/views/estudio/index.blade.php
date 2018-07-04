@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Estudios</strong>
    </h1>
    <a href="{{route('estudio.create')}}" class="btn btn-primary">Nuevo</a>
    <a href="{{route('home') }}" class="btn btn-default">Regresar</a>
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
                    <a href="{{route('estudio.edit', $estudio)}}" class="btn btn-info btn-xs"><i class="fas fa-pen"></i></a>
                    <a href="{{route('estudio.destroy', $estudio)}}" class="btn btn-danger btn-xs destroy"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection