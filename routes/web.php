<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/niños', [App\Http\Controllers\NiñosController::class, 'index']);
Route::get('/niños/{id_kid}', [App\Http\Controllers\NiñosController::class, 'show']);
Route::get('/niños/{id_kid}/edit', [App\Http\Controllers\NiñosController::class, 'edit']);
Route::put('/niños/{id_kid}', [App\Http\Controllers\NiñosController::class, 'update']);

Route::get('/cuidadores', [App\Http\Controllers\CuidadoresController::class, 'index']);
Route::get('/cuidadores/{id_kid}', [App\Http\Controllers\CuidadoresController::class, 'show']);
Route::get('/cuidadores/create/{id_kid}', [App\Http\Controllers\CuidadoresController::class, 'create']);
Route::get('/cuidadores/{cuidador}/edit', [App\Http\Controllers\CuidadoresController::class, 'edit']);
Route::post('/cuidadores/{id_kid}', [App\Http\Controllers\CuidadoresController::class, 'store']);
Route::put('/cuidadores/{cuidador}', [App\Http\Controllers\CuidadoresController::class, 'update']);

Route::get('/busqueda', [App\Http\Controllers\CuidadoresController::class, 'busqueda']);
Route::post('/archivo/{id_kid}', [App\Http\Controllers\CuidadoresController::class, 'archivo']);

