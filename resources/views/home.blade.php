@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenidos

               <div class="panel-body">
               <p> <a href="{{route('medicamento.index')}}">Medicamentos</a> </p>
               <p><a href="{{route('estudio.index')}}">Estudios</a></p>
               <p><a href="{{route('paciente.index')}}">Pacientes</a></p>
               <p><a href="{{route('enfermedad.index')}}">Enfermedades</a></p>
               <p><a href="{{route('receta.index')}}">Recetas</a></p>
               </div> 



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
