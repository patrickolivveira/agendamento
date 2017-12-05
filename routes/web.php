<?php

Auth::routes();

Route::get('/', 'IndexController@index');
Route::get('entrar', 'IndexController@login');
Route::get('cadastrar', 'IndexController@register');

Route::get('home', 'HomeController@index')->name('home');

Route::resource('pacientes', 'PacientesController');

Route::get('medicos', 'MedicosController@index');
Route::get('medicos/novo', 'MedicosController@novo');
Route::post('medicos/salvar', 'MedicosController@salvar');

// Route::get('agendamentos', 'AgendamentosController@index');
// Route::get('agendamentos/novo', 'AgendamentosController@novo');
// Route::post('agendamentos/salvar', 'AgendamentosController@salvar');

Route::resource('agendamentos', 'AgendamentosController');