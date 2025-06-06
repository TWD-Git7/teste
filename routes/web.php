<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Funcionario\FuncionarioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('painel')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('paneil-admin');
    Route::get('crudFuncionario', [FuncionarioController::class, 'index'])->name('crudFuncionario');
});
