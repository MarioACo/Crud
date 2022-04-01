<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;

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


//ruta de la vista principal
Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
//ruta de la vista create
Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');
//ruta para guardar datos
Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');
//ruta de la vista editar
Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
//ruta para editar datos
Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
//ruta para mostrar datos en eliminar
Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
//ruta para eliminar personas
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');