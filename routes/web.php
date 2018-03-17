<?php


Route::get('/','HomeController@index');




Auth::routes();


Route::group(['middleware' => 'auth'], function(){
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/indexMedicamentos', 'ControladorPaginado@MainMedicamentos');
Route::name('indexMedicamentos')->post('/indexMedicamentos', 'ControladorPaginado@store');
Route::get('/indexMedicamentos/formularioMedicamento', 'ControladorPaginado@formMedicamentos');

Route::name('delete_medicamento')->delete('/indexMedicamentos/{medicamento}', 'ControladorPaginado@delete');

}
);
