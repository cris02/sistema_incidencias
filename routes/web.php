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

Route::get('/', 'HomeController')->name('home');


/*
    Nota:
    * para evitar el conflicto de tener muchas rutas por cada accion se debe asignar nombre a las rutas con ->name('ruta')
    * Se recomienda agrupar las rutas en base a la organizacion de cada categoria con el codigo :

        1.  Route::group(['prefix' => 'administracion', 'namespace' => 'Admin'], function () {
                Route::resource('usuarios', 'UserController');
            });

        2.  Route::prefix('administracion')->namespace('Admin')->group(function () {
                Route::resource('usuarios', 'UserController');
            });

    * para ver las rutas usar el comando php artisan route:list

    * El route model binding es un mecanismo que llamamos "de conveniencia", básicamente es para "auto-inyectar" instancias de algún modelo usando las rutas de Laravel

*/


Route::prefix('administracion')->namespace('Admin')->name('admin.')->group(function () {
    Route::resource('usuarios', 'UserController')->names('user')->parameters(['usuarios' => 'user']);
});


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

