@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
    <h1>
        <strong>Notas</strong>
    </h1>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-left">Medicamento</th>
                <th class="text-left">Dosis</th>
            </tr>
        </thead>
         
         <tfoot>

    <th colspan=4> {{ $recetas_medicamentos->render() }} </th>
      
  </tfoot>
       
        <tbody>
            @foreach($recetas_medicamentos as $receta_medicamento)
            <tr>
                <td class="text-left">{{ $receta_medicamento->id_medicamento }}</td>
                <td class="text-left">{{ $receta_medicamento->dosis }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection