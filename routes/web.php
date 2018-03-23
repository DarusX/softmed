<?php


Route::get('/','HomeController@index');




Auth::routes();


Route::group(['middleware' => 'auth'], function(){
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/indexMedicamentos', 'MedicamentoController@MainMedicamentos');
Route::name('indexMedicamentos')->post('/indexMedicamentos', 'MedicamentoController@store');
Route::get('/indexMedicamentos/formularioMedicamento', 'ControladorPaginado@formMedicamentos');

Route::name('delete_medicamento')->delete('/indexMedicamentos/{medicamento}', 'MedicamentoController@delete');

}
);
