<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegosController;
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

Route::get('/juegos',[JuegosController::class,'index'])->name('juegos.index');
Route::get('/juegos/create',[JuegosController::class,'create'])->name('juegos.create');
Route::post('/juegos/create',[JuegosController::class,'store'])->name('juegos.store');
Route::resource('/juegos',JuegosController::class);
