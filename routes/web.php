<?php


Route::get('/','HomeController@index');




Auth::routes();


Route::group(['middleware' => 'auth'], function(){
Route::get('/home', 'HomeController@index')->name('home');

//Rutas de medicamentos
Route::resources([
	'medicamento'=>'MedicamentoController'
]);

//Rutas de estudios
Route::resources([
	'estudio'=>'EstudioController'
]);

//Rutas de estudios
Route::resources([
	'paciente'=>'PacienteController'
]);

}
);
