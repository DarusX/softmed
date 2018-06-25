@extends('layouts.app') 
@section('content')
<div class="col-sm-12">
  
  <form action="{{route('receta.update', $receta->id)}}" method="post">
   {{ csrf_field()}}
   {{ method_field('PUT')}}
  
    <legend>Editar Receta para {{$receta->consulta->paciente->nombreCompleto}}</legend>
  
  
    <div class="form-group {{$errors->has('fecha')? ' has-error':''}}">
      <label class="control-label" for="">Fecha</label>
      <input type="date" name="fecha" class="form-control" value="{{ $receta->fecha }}">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-info">Guardar</button>
    </div>

  </form>

</div>



<div class="col-sm-6">
    
    <form action="{{route('nota.store')}}" method="post">
     {{ csrf_field()}}

    <legend>Nota</legend>
  
    <input type="hidden" name="consulta_id" value="{{$receta->consulta_id}}">

    <textarea style="resize: none" name="nota" rows="5" cols="75">{{old('nota')}}</textarea>

    <div class="form-group">
      <button type="submit" class="btn btn-info">Agregar</button>
    </div>
  
  </form>
</div>

<div class="col-sm-6">
    <h4>
        <strong>Notas previas</strong>
    </h4>
    <table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-left">Fecha</th>              
                <th class="text-left">Nota</th>
            </tr>
        </thead>
         
         <tfoot>
      
  </tfoot>
       
        <tbody>
            @foreach($receta->consulta->notas as $nota)
            <tr>
                <td class="text-left">{{ $nota->consulta->fecha }}</td>
                <td class="text-left">{{ $nota->nota }}</td>
                <td class="text-center">
                <a href="" data-target="#modal-delete-{{$nota->id}}" data-toggle="modal" class="btn btn-xs btn-default"><i class="fas fa-trash-alt"></i></a>
                @include('nota.modal')
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="col-sm-12">

    <form action="{{route('receta_medicamento.store')}}" method="post">
     {{ csrf_field()}}

    <legend>Agregar medicamentacion a la receta</legend>
     
    <input type="hidden" name="receta_id" value="{{$receta->id}}">

  <select name="medicamento_id">
   @foreach($medicamentos as $medicamento)
    <option  value="{{$medicamento->id}}"> {{ $medicamento->DatosCompletos}} </option>
  @endforeach
  </select>
    
   <div class="form-group {{$errors->has('dosis')? ' has-error':''}}">
      <label class="control-label" for="">Dosis</label>
      <input type="text" name="dosis" class="form-control" value="{{old('dosis')}}">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-info">Agregar</button>
    </div>
  
  </form>

</div>


<div class="col-sm-12">
<table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-left">Medicamento</th>
                <th class="text-left">Dosis</th>
                <th class="text-left">Edicion</th>
            </tr>
        </thead>
       
        <tbody>
            @foreach($receta->medicamentos as $medicamento)
            <tr>
                <td class="text-left">{{ $medicamento->DatosCompletos }}</td>
                <td class="text-left">{{ $medicamento->pivot->dosis }}</td>
                <td class="text-left">
                <a href="" data-target="#modal-delete-{{$medicamento->id}}" data-toggle="modal" class="btn btn-xs btn-default"><i class="fas fa-trash-alt"></i></a>                
            
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>



<div class="col-sm-6">
  <form action="{{route('add_enfermedad', $receta->id)}}" method="post">
     {{ csrf_field()}}

    <legend>Agregar diagnostico de enfermedades a la receta</legend>
     
    <input type="hidden" name="receta_id" value="{{$receta->id}}">

  <select name="enfermedad_id">
   @foreach($enfermedades as $enfermedad)
    <option  value="{{$enfermedad->id}}"> {{ $enfermedad->enfermedad}} </option>
  @endforeach
  </select>
    
    <div class="form-group">
      <button type="submit" class="btn btn-info">Agregar</button>
    </div>
  
  </form>

</div>

<div class="col-sm-5">
<table class="table table-striped" id="MyTable">
        <thead>
            <tr>
                <th class="text-left">Enfermedad</th>
            </tr>
        </thead>
       
        <tbody>
            @foreach($receta->enfermedades as $enfermedad)
            <tr>
                <td class="text-left">{{ $enfermedad->enfermedad }}</td>
                <td class="text-left">
                <a href="{{ route('rmv_enfermedad', ['receta' => $receta->id, 'enfermedad' => $enfermedad->id])}}" class="btn btn-xs btn-default"><i class="fas fa-trash-alt"></i></a>                
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection