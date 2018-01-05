<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();
Route::get('auth/{provider}', 'Auth\ProvidersController@redirectToProvider')->name('provider');
Route::get('auth/{provider}/callback', 'Auth\ProvidersController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

//nuevo codigo para Curso
Route::resource('cursos','CursoController');
Route::get('curso', 'CursoController@index')->name('cursos.layouts.index');  //->name('cursos.layouts.index')

//nuevo codigo para plantilla
Route::resource('plantillas','PlantillaController');
Route::get('plantilla', 'PlantillaController@index')->name('plantillas.layouts.index');

//nuevo codigo para roles de Matricula
Route::resource('roles','RoleController');
Route::get('role', 'RoleController@index')->name('roles.layouts.index');

//nuevo codigo para estados de Matricula
Route::resource('estados','EstadoController');
Route::get('estado', 'EstadoController@index')->name('estados.layouts.index');

//nuevo codigo para usuarios
Route::resource('users','UserController');
Route::get('user', 'UserController@index')->name('users.layouts.index');

//nuevo codigo para sesiones
Route::resource('sesiones','SesionController');
Route::get('sesion', 'SesionController@index')->name('sesiones.layouts.index');