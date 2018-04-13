<?php


Route::get('/','HomeController@index');




Auth::routes();


Route::group(['middleware' => 'auth'], function(){
Route::get('/home', 'HomeController@index')->name('home');

//Rutas de medicamentos
Route::name('indexMedicamentos')->get('/indexMedicamentos', 'MedicamentoController@mainMedicamentos');
Route::name('create_medicamento')->get('/indexMedicamentos/create','MedicamentoController@create');
Route::name('medicamento_store')->post('/indexMedicamentos','MedicamentoController@store');
Route::name('edit_medicamento')->get('/indexMedicamentos/{medicamento}/edit', 'MedicamentoController@edit');
Route::name('update_medicamento')->put('/medicamento/{medicamento}', 'MedicamentoController@update');
Route::name('delete_medicamento')->delete('/indexMedicamentos/{medicamento}', 'MedicamentoController@delete');

//Rutas de estudios
Route::resources([
	'estudio'=>'EstudioController'
]);


}
);
