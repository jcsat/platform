<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\CategoriaController;

use App\Http\Controllers\Admin\EventoController;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\AporteController;

use App\Http\Controllers\Admin\ObjetoController;

use App\Http\Controllers\Admin\BeneficiarioController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');


Route::resource('categorias', CategoriaController::class)->names('admin.categorias');

Route::resource('eventos', EventoController::class)->names('admin.eventos');

Route::resource('aportes', AporteController::class)->names('admin.aportes');

Route::resource('objetos', ObjetoController::class)->names('admin.objetos');

Route::resource('beneficiarios', BeneficiarioController::class)->names('admin.beneficiarios');