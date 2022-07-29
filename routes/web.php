<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
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

Route::get('/', HomeController::class);

Route::get('proyectos/home', [ProyectoController::class, 'home'])->name('proyectos.home');
Route::get('proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');

Route::get('proyectos/create', [ProyectoController::class, 'create'])->name('proyectos.create');
Route::post('proyectos', [ProyectoController::class, 'store'])->name('proyectos.store');
Route::get('proyectos/{proyecto}', [ProyectoController::class, 'show'])->name('proyectos.show');
