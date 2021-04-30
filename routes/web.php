<?php

Route::get('/', 'TestController@welcome');

Route::get('/contacto', 'ContactController@formulario');

Auth::routes();

Route::post('/buscar', 'SearchController@show');
Route::get('/products/json', 'SearchController@data');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/diagnosticos/{id}', 'DiagnosticoController@show');
Route::get('/pacientes/{paciente}', 'PacienteController@show');

Route::get('/doctores/{id}', 'DoctorController@show');
Route::get('/especialidades/{especialidad}', 'EspecialidadController@show');

Route::get('/citas', 'PruebasController@index');
Route::post('/doctors', 'PruebasController@doctors');
Route::post('/listadodoctores', 'SearchDoctorController@show');
Route::post('/empresas','PruebasController@empresas');



Route::get('/doctor/avatar/{filename}', 'DoctorController@getImage')->name('doctor.avatar');

Route::get('/pedircita/{id}', 'DoctorController@cita'); // Formulario Citas


Route::get("getImage/{nombre}",'DoctorController@descargar');



Route::get('/miemail', function () {
    return view('test');
}); //Esta ruta la ponemos en la raiz para que nada mas ejecutar nuestra aplicación aparezca nuestro formulario

Route::post('/contactar', 'EmailController@contact')->name('contact');
//Ruta que esta señalando nuestro formulario


Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')
->group(function () {

	// Diagnosticos
	Route::get('/diagnosticos', 'DiagnosticoController@index'); // listado
	Route::get('/diagnosticos/create', 'DiagnosticoController@create'); // formulario
	Route::post('/diagnosticos', 'DiagnosticoController@store'); // registrar
	Route::get('/diagnosticos/{id}/edit', 'DiagnosticoController@edit'); // formulario edición
	Route::post('/diagnosticos/{id}/edit', 'DiagnosticoController@update'); // actualizar
	Route::delete('/diagnosticos/{id}', 'DiagnosticoController@destroy'); // form eliminar

	// Pacientes
	Route::get('/pacientes', 'PacienteController@index'); // listado
	Route::get('/pacientes/create', 'PacienteController@create'); // formulario
	Route::post('/pacientes', 'PacienteController@store'); // registrar
	Route::get('/pacientes/{paciente}/edit', 'PacienteController@edit'); // formulario edición
	Route::post('/pacientes/{paciente}/edit', 'PacienteController@update'); // actualizar
	Route::delete('/pacientes/{paciente}', 'PacienteController@destroy'); // form eliminar

	// Doctores
	Route::get('/doctores', 'DoctorController@index'); // listado
	Route::get('/doctores/create', 'DoctorController@create'); // formulario
	Route::post('/doctores', 'DoctorController@store'); // registrar
	Route::get('/doctores/{id}/edit', 'DoctorController@edit'); // formulario edición
	Route::post('/doctores/{id}/edit', 'DoctorController@update'); // actualizar
	Route::delete('/doctores/{id}', 'DoctorController@destroy'); // form eliminar

	// Especialidades
	Route::get('/especialidades', 'EspecialidadController@index'); // listado
	Route::get('/especialidades/create', 'EspecialidadController@create'); // formulario
	Route::post('/especialidades', 'EspecialidadController@store'); // registrar
	Route::get('/especialidades/{especialidad}/edit', 'EspecialidadController@edit'); // formulario edición
	Route::post('/especialidades/{especialidad}/edit', 'EspecialidadController@update'); // actualizar
	Route::delete('/especialidades/{especialidad}', 'EspecialidadController@destroy'); // form eliminar

	// FORO

	Route::get('/foro', 'ForoController@index'); // listado




});
