<?php


Route::get('/','HomeController@index');




Auth::routes();


Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');

	Route::resources([
		'estudio'=>'EstudioController',
		'paciente'=>'PacienteController',
		'enfermedad'=>'EnfermedadController',
		'receta'=>'RecetaController',
		'medicamento'=>'MedicamentoController',
		'consulta'=>'ConsultaController'
		]);

	Route::get('paciente/{id}/consulta/create', 'ConsultaController@create')->name('create_Consulta');

});