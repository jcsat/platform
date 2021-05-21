<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;

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
/*
Route::get('/', function () {
    return view('welcome');
})->name('home');
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::post('contact', [HomeController::class, 'store'])->name('store');

Route::get('eventos', [EventoController::class, 'index'])->name('eventos.index'); 

Route::get('eventos/{evento}', [EventoController::class, 'show'])->name('eventos.show');

Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');

Route::get('categorias/{categoria}', [CategoriaController::class, 'show'])->name('categorias.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
