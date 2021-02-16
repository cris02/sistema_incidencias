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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::get('administracion/usuarios', 'Admin\UserController@index');
Route::get('administracion/usuarios/{user}', 'Admin\UserController@show');

//Gestion
    //tickets
    //asignacion

//Configuracion
    //tipos
    //prioridades

//reportes
    //creados
    //pendientes

//Administracion
    //usuarios
    //roles
    //permisos(solo lectura)

