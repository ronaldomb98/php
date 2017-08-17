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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hola', 'HomeController@hola1')->name('hola1');

Route::resource('usuarios', 'UsuariosController');
Route::post('/usuarios/showTable','UsuariosController@showTable')->name('usuarios.showTable');