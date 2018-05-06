@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Estudios</strong>
    </h1>
   <a href="{{route('estudio.create')}}" class="btn btn-primary" role="button">Nuevo</a>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Estudio</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
         
         <tfoot>

    <th colspan=4> {{ $estudios->render() }} </th>
      
  </tfoot>
       
        <tbody>
            @foreach($estudios as $estudio)
            <tr>
                <td class="text-center">{{ $estudio->id }}</td>
                <td class="text-center">{{ $estudio->estudio }}</td>
                <td class="text-center">
                <a href="{{ route('estudio.edit', ['estudio' => $estudio->id])}}" ><i class="fas fa-pencil-alt"></i></a>
                <a href="" data-target="#modal-delete-{{$estudio->id}}" data-toggle="modal"><i class="fas fa-trash-alt"></i></a>                
            @include('estudio.modal')
            </td>
            </tr>


            @endforeach
        </tbody>
    </table>
</div>
@endsection
