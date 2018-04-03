@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido

               <div class="panel-body">
               <p> <a href="{{ url('/indexMedicamentos') }}">Medicamentos</a> </p>
               <a href="{{ url('/indexEstudios') }}">Estudios</a>

               </div> 



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
