@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Usuarios</strong>
    </h1>
    <a href="{{route('estudio.create')}}" class="btn btn-default">Nuevo</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->role->role}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection