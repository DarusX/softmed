@extends('layouts.app') 
@section('content')
<div class="page">
    @include('layouts.navbar')
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        @include('layouts.sidebar')
        <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
                <div class="container-fluid">
                    <h2 class="no-margin-bottom">Crear Consulta</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <section class="tables">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">{{$paciente->nombreCompleto}}</h3>
                                </div>
                                <div class="card-body">
									<form action="{{route('consulta.store')}}" method="post">
										{{ csrf_field()}}
							
										<input type="hidden" name="paciente_id" value="{{$paciente->id}}">
							
										<div class="col-sm-6">
											<div class="form-group {{$errors->has('fecha')? ' has-error':''}}">
												<label class="control-label" for="">Fecha</label>
												<input type="text" name="fecha" class="form-control datepicker" value="{{old('fecha')}}" autocomplete="off">
											</div>
										</div>
							
                                        <div class="col-lg-5">
                                                <div class="form-group">
                                                    <select id="hora" name="hora_id" class="select2 form-control">
                                                        <option value="Aqui van los corchetes para id hora"> Aqui se mostraran las horas </option>
                                                    </select>
                                                </div>
                                            </div>
							
										<div class="col-sm-12">
											<div class="form-group">
												<button type="submit" class="btn btn-info">Agendar</button>
												<a href="{{ URL::previous() }}" class="btn btn-danger" role="button">Cancelar</a>
											</div>
										</div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection