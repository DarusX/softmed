<?php


Route::get('/','HomeController@index');




Auth::routes();


Route::group(['middleware' => 'auth'], function(){
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::name('indexMedicamentos')->get('/indexMedicamentos', 'MedicamentoController@mainMedicamentos');

Route::name('create_medicamento')->get('/indexMedicamentos/create','MedicamentoController@create');

Route::name('medicamento_store')->post('/indexMedicamentos','MedicamentoController@store');

Route::name('edit_medicamento')->get('/indexMedicamentos/{medicamento}/edit', 'MedicamentoController@edit');

Route::name('update_medicamento')->put('/medicamento/{medicamento}', 'MedicamentoController@update');
Route::name('delete_medicamento')->delete('/indexMedicamentos/{medicamento}', 'MedicamentoController@delete');


}
);
