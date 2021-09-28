<?php

use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\InicioController;
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

Route::get('/',InicioController::class); 
Route::get('/informacion',[ContenidoController::class,'informacion']);
Route::get('/vista',[ContenidoController::class,'vista']);
Route::get('/vistas',[ContenidoController::class,'vistas']);
Route::get('/rutas',[ContenidoController::class,'rutas']);
Route::get('/control',[ContenidoController::class,'control']);
Route::get('/inicio',[ContenidoController::class,'inicio']);
Route::get('/nuevo',[ContenidoController::class,'nuevo']);