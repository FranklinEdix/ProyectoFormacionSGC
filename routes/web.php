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

Route::middleware(['auth:sanctum'])->get('/Nivelacion/Principal', function () {
    return view('Nivelacion.Principal');
})->name('NivelacionPrincipal');

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