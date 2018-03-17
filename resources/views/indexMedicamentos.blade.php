@extends('layouts.app')
@section('content')
  

<div class="text-right"> 

  <a href="{{ url('/indexMedicamentos/formularioMedicamento') }}" class="btn  btn-info" role="button" >Agregar medicamento nuevo</a>
</div>
<table class="table table-striped" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Componente activo</th>
        <th class="text-center">Presentacion</th>
        <th class="text-center">Acciones</th>

    </tr>
  </thead>
  
  <tfoot>

    <th colspan=4> {{ $medicamentos->render() }} </th>
      
  </tfoot>
  

  <tbody>
    @foreach($medicamentos as $medicamento)
        <tr>
            <td class="text-center">{{ $medicamento->id }}</td>
            <td class="text-center">{{ $medicamento->nombre }}</td>
            <td class="text-center">{{ $medicamento->compuesto }}</td>
        <td class="text-center">{{ $medicamento->presentacion }}</td>


            <td class="text-center">
                <a href="#" class="btn btn-success btn-sm" role="button" >Editar</a>
				<form action="{{route('delete_medicamento', ['medicamento' => $medicamento->id])}}" method="POST">
          {{ csrf_field()}}
          {{  method_field('DELETE') }}
          <button type="submit" class='btn btn-danger'>Delete</button>
        </form>
            </td>
         

        </tr>
    @endforeach

  </tbody>


@endsection
