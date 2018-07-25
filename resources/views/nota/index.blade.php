@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Notas</strong>
    </h1>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-left">Fecha</th>
                <th class="text-left">Hora</th>
                <th class="text-left">Nota</th>

            </tr>
        </thead>
       
        <tbody>
            @foreach($notas as $nota)
            <tr>
                <td class="text-left">{{ $nota->consulta->fecha }}</td>
                <td class="text-left">{{ $nota->consulta->hora->hora }}</td>
                <td class="text-left">{{ $nota->nota }}</td>
                <td class="text-center">
                <a href="{{ route('nota.edit', $nota)}}" class="btn btn-xs btn-default"><i class="fas fa-pencil-alt"></i></a>
                <a href="" data-target="#modal-delete-{{$nota->id}}" data-toggle="modal" class="btn btn-xs btn-default"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection