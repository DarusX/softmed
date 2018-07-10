<?php


Route::get('/','HomeController@index');




Auth::routes();


Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('paciente/{id}/consulta/create', 'ConsultaController@create')->name('create_consulta');
	Route::get('consulta/{id}/nota/create', 'NotaController@create')->name('create_Nota');
	Route::get('consulta/{id}/receta/create', 'RecetaController@create')->name('create_Receta');
	Route::post('receta/{id}/addEnfermedad', 'RecetaController@addEnfermedad')->name('add_enfermedad');
	Route::get('receta/{id}/rmvEnfermedad/{enfermedad_id}', 'RecetaController@rmvEnfermedad')->name('rmv_enfermedad');
	Route::post('receta/{id}/addEstudio', 'RecetaController@addEstudio')->name('add_estudio');

	Route::resources([
		'estudio'=>'EstudioController',
		'paciente'=>'PacienteController',
		'enfermedad'=>'EnfermedadController',
		'receta'=>'RecetaController',
		'medicamento'=>'MedicamentoController',
		'consulta'=>'ConsultaController',
		'nota'=>'NotaController',
		'receta'=>'RecetaController',
		'receta_medicamento'=>'Receta_MedicamentoController'
		]);

	Route::get('paciente/{id}/consulta/create', 'ConsultaController@create')->name('create_Consulta');
	Route::get('consulta/{id}/nota/create', 'NotaController@create')->name('create_Nota');
	Route::get('consulta/{id}/receta/create', 'RecetaController@create')->name('create_Receta');
	Route::post('receta/{id}/addEnfermedad', 'RecetaController@addEnfermedad')->name('add_enfermedad');
	Route::get('receta/{id}/rmvEnfermedad/{enfermedad_id}', 'RecetaController@rmvEnfermedad')->name('rmv_enfermedad');
	Route::post('receta/{id}/addEstudio', 'RecetaController@addEstudio')->name('add_estudio');
});