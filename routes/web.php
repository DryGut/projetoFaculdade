<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaculdadeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
->name('home');

Route::get('/', [FaculdadeController::class, 'paginaInicial'])
->name('inicial');

Route::get('/instituicoes', [FaculdadeController::class, 'listaJson'])
->name('json');

Route::get('/busca', [FaculdadeController::class, 'areaDeBusca'])
->name('busca');