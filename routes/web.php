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

//Esta ruta te dirige a la ventana pricipal
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum'])->get('/dashboard/Nivelacion/Principal', function () {
    return view('Nivelacion.Principal');
})->name('dashboard.NivelacionPrincipal');

Route::middleware(['auth:sanctum'])->get('/dashboard/Nivelacion/Ense-Aprendizaje', function () {
    return view('Nivelacion.Ense-Aprendizaje');
})->name('dashboard.NivelacionEnse-Aprendizaje');

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

Route::middleware(['auth:sanctum'])->get('Decano', function() {
    return view('DashBoardDECANO.DashBoardDECANO');
})->name('Decano');

Route::middleware(['auth:sanctum'])->get('DirectorEscuela', function() {
    return view('DashBoardDIRECTORESCUELA.DashBoardDIRECTORESCUELA');
})->name('DirectorEscuela');

Route::middleware(['auth:sanctum','verificacionRoles'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Ruta para Guia rapida de Formacion

Route::middleware(['auth:sanctum'])->get('/dashboard/GuiaRapida', function () {
    return view('Formacion.GuiaRapida');
})->name('dashboard.GuiaRapida');

//Ruta para Grupos interes de Formacion
Route::middleware(['auth:sanctum'])->get('/dashboard/GruposInteres', function () {
    return view('Formacion.GruposInteres');
})->name('dashboard.GruposInteres');

//Ruta para Procesos de Formacion

Route::middleware(['auth:sanctum'])->get('/dashboard/Procesos', function () {
    return view('Formacion.Procesos');
})->name('dashboard.Procesos');

//Ruta para Procesos de Formacion

Route::middleware(['auth:sanctum'])->get('/dashboard/Normativa', function () {
    return view('Formacion.Normativa');
})->name('dashboard.Normativa');

//Ruta para documentación de Formacion

Route::middleware(['auth:sanctum'])->get('/dashboard/Documentacion', function () {
    return view('Formacion.Documentacion');
})->name('dashboard.Documentacion');

//Ruta para la ventana de Indicadores de Formacion
Route::middleware(['auth:sanctum'])->get('/dashboard/Indicadores', function () {
    return view('Formacion.Indicadores');
})->name('dashboard.Indicadores');