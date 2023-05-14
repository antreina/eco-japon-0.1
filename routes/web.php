<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ResiduosController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

 Route::get('reportes/repgen', [App\Http\Controllers\ResiduosController::class, 'generarReporte'])
          ->name('residuos');

 Route::get('/repgen', [App\Http\Controllers\UserController::class, 'generarReporte'])
          ->name('users');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios', [UsuariosController::class,'index']);
Route::get('/residuos', [ResiduosController::class,'index']);
Route::get('reportes/reporte', [ResiduosController::class, 'generarReporte']);
Route::get('/reporte', [UserController::class, 'generarReporte']);