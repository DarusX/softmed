@extends('layouts.app') @section('content')
<div class="col-sm-12">
    <h1>
        <strong>{{$receta->consulta->paciente->nombreCompleto}}</strong>
    </h1>
</div>
<div class="col-sm-12">
    <button class="btn btn-warning">
        <i class ="fas fa-print"></i> Imprimir</button>
</div>
<div class="col-sm-12">
    @if(isset($receta->consulta->nota))
    <h4>
        <strong>Nota</strong>
    </h4>
    <p>{{$receta->consulta->nota->nota}}</p>
    <a href="{{route('nota.destroy', $receta->consulta->nota)}}" class="btn btn-danger destroy"><i class="fas fa-times"></i> Eliminar</a>
    @else
    <form action="{{route('nota.store')}}" method="post">
        {{ csrf_field()}}
        <input type="hidden" name="consulta_id" value="{{$receta->consulta_id}}">
        <div class="form-group">
            <label for="">Nota</label>
            <textarea name="nota" rows="5" class="form-control">{{old('nota')}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
        </div>
    </form>
    @endisset
</div>
<div class="col-sm-12">
    <h4>
        <strong>Medicamentos</strong>
    </h4>
    <div class="row">
        <form action="{{route('add_medicamento', $receta->id)}}" method="post">
            {{ csrf_field()}}
            <input type="hidden" name="receta_id" value="{{$receta->id}}">
            <div class="col-sm-5">
                <div class="form-group">
                    <select id="medicamento" name="medicamento_id" class="select2 form-control">
                        @foreach($medicamentos as $medicamento)
                        <option value="{{$medicamento->id}}"> {{$medicamento->nombre}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group {{$errors->has('dosis')? ' has-error':''}}">
                    <input type="text" name="dosis" class="form-control input-sm" value="{{old('dosis')}}" placeholder="Dosis">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-block btn-primary"><i class="fas fa-plus"></i> Agregar</button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>Medicamento</th>
                <th>Dosis</th>
                <th>Edicion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($receta->medicamentos as $medicamento)
            <tr>
                <td>{{ $medicamento->DatosCompletos }}</td>
                <td>{{ $medicamento->pivot->dosis }}</td>
                <td>
                    <a href="{{ route('rmv_medicamento', ['receta' => $receta->id, 'medicamento' => $medicamento->id])}}" class="btn btn-xs btn-danger">
                        <i class="fas fa-times"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="col-sm-12">
    <h4>
        <strong>Diagnóstico</strong>
    </h4>
    <div class="row">
        <form action="{{route('add_enfermedad', $receta->id)}}" method="POST">
            {{ csrf_field()}}
            <input type="hidden" name="receta_id" value="{{$receta->id}}">
            <div class="col-sm-10">
                <div class="form-group">
                    <select id="enfermedad" name="enfermedad_id" class="select2 form-control">
                        @foreach($enfermedades as $enfermedad)
                        <option value="{{$enfermedad->id}}"> {{ $enfermedad->enfermedad}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-block btn-primary">
                        <i class="fas fa-plus"></i> Agregar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>Enfermedad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($receta->enfermedades as $enfermedad)
            <tr>
                <td>{{ $enfermedad->enfermedad }}</td>
                <td>
                    <a href="{{ route('rmv_enfermedad', ['receta' => $receta->id, 'enfermedad' => $enfermedad->id])}}" class="btn btn-xs btn-danger"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="col-sm-12">
    <h4>
        <strong>Estudios</strong>
    </h4>
    <div class="row">
        <form action="{{route('add_estudio', $receta->id)}}" method="post">
            {{ csrf_field()}}
            <input type="hidden" name="receta_id" value="{{$receta->id}}">
            <div class="col-sm-10">
                <select name="estudio_id" class="select2 form-control">
                    @foreach($estudios as $estudio)
                    <option value="{{$estudio->id}}"> {{ $estudio->estudio}} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-block btn-primary"><i class="fas fa-plus"></i> Agregar</button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>Estudios</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($receta->estudios as $estudio)
            <tr>
                <td>{{ $estudio->estudio }}</td>
                <td>
                    <a href="{{ route('rmv_estudio', ['receta' => $receta->id, 'estudio' => $estudio->id])}}" class="btn btn-xs btn-danger"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection