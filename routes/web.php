<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatriculaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});

//Intentar utilizar una ruta con nombre de la tabla seguida de su accion
Route::get('/alumnos', [MatriculaController::class, 'index']) -> name('alumno.index');//definiendo nombre a las rutas para manejarlas

Route::get('/alumnos/crear', [MatriculaController::class, 'crear'])->name('alumno.crear');

Route::post('/alumnos/guardar', [MatriculaController::class, 'guardar'])->name('alumno.guardar');

Route::get('/alumnos/editar/{codigo}',[MatriculaController::class, 'editar'])->name('alumno.editar'); //indicamos que la ruta espera recibir un parametro, en este caso de la vista

Route::put('/alumnos/actualizar/{id}', [MatriculaController::class, 'actualizar'])->name('alumno.actualizar'); //ya que se necesita saber que id sera necesitado

Route::get('/alumnos/eliminar/{codigo}', [MatriculaController::class, 'eliminar'])->name('alumno.eliminar');

Route::get('/alumnos/destroy/{id}',[MatriculaController::class, 'destroy'])->name('alumno.destroy');


//Verbos http
//get para mostrar o acceder (navegacion entre rutas)
//post para guardar
//put para actualizar 
//delete para borrar