<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\administrador\adminController;
use App\Http\Controllers\votoController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/', function() { return view('/usuario/user'); });

Auth::routes(); 

//Route::get('/usuario/user{id}', [HomeController::class, 'getUser'])->name('flow');
//Route::get(, [HomeController::class, 'getUser']);
Route::get('/usuario/user', [votoController::class, 'form_consulta'])->name('form_consulta');
Route::post('/usuario/user', [votoController::class, 'consultar'])->name('consulta');

Route::get('/usuario/listado/{id}', [votoController::class, 'votar'])->name('form_listado');
Route::post('/usuario/user/{id}',[votoController::class, 'votando'])->name('votarCandi');
Route::get('/Administrador', [HomeController::class, 'index'])->name('Administrador');
//seccion administrador
Route::get('/Administrador/registrarAlumno', [adminController::class, 'formularioregistro'])->name('formularioregis');
Route::get('/Administrador/candidato', [adminController::class, 'can'])->name('formularioca');
Route::post('/Administrador/registrarAlumno', [adminController::class, 'registro'])->name('registrado');
Route::post('/Administrador/candidato', [adminController::class, 'candi'])->name('registradoc');

//Route::get('voto', [votoController::class, 'votar'])->name('votando');
//Route::post('voto', [votoController::class, 'votar'])->name('vota');

Route::get('/listado', [adminController::class, 'index'])->name('listado');