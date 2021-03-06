<?php

Route::get('/', function(){
	return redirect()->route('login');
});

Route::get('/home','HomeController@index')->name('home');




Auth::routes();


Route::group(['middleware' => 'auth'], function(){

	Route::get('paciente/{id}/consulta/create', 'ConsultaController@create')->name('create_consulta');
	Route::get('/{id}/nota/create', 'NotaController@create')->name('create_Nota');
	Route::get('consulta/{id}/receta/create', 'RecetaController@create')->name('create_Receta');
	Route::get('receta/{id}/imprimir', 'RecetaController@imprimir')->name('receta.imprimir');
	Route::post('receta/{id}/addMedicamento', 'RecetaController@addMedicamento')->name('add_medicamento');
	Route::get('receta/{id}/rmvMedicamento/{medicamento_id}', 'RecetaController@rmvMedicamento')->name('rmv_medicamento');
	Route::post('receta/{id}/addEnfermedad', 'RecetaController@addEnfermedad')->name('add_enfermedad');
	Route::get('receta/{id}/rmvEnfermedad/{enfermedad_id}', 'RecetaController@rmvEnfermedad')->name('rmv_enfermedad');
	Route::post('receta/{id}/addEstudio', 'RecetaController@addEstudio')->name('add_estudio');
	Route::get('receta/{id}/rmvEstudio/{enfermedad_id}', 'RecetaController@rmvEstudio')->name('rmv_estudio');
	Route::get('paciente/search','PacienteController@busqueda')->name('busqueda');
	Route::get('paciente/{paciente}/expedientes', 'PacienteController@expediente')->name('expediente');
	Route::get('paciente/{paciente}/create_user', 'UsuarioController@store')->name('create_user');

	        

	Route::resources([
		'estudio'=>'EstudioController',
		'paciente'=>'PacienteController',
		'enfermedad'=>'EnfermedadController',
		'receta'=>'RecetaController',
		'medicamento'=>'MedicamentoController',
		'consulta'=>'ConsultaController',
		'nota'=>'NotaController',
		'receta'=>'RecetaController',
		'receta_medicamento'=>'Receta_MedicamentoController',
		'usuario' => 'UsuarioController',
		'scheduler' => 'SchedulerController'
	]);
	Route::resource('usuario', 'UsuarioController', [
		'except' => [
			'store'
		]
	]);
});
