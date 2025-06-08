<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\Bolsa\BolsaController;
use App\Http\Controllers\Funcionario\FuncionarioController;
use App\Http\Controllers\Padrinho\PadrinhoController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('painel')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('paneil-admin');
    Route::get('crudFuncionario', [FuncionarioController::class, 'index'])->name('crudFuncionario');

    Route::get('bolsasdisponiveis', [BolsaController::class, 'index'])->name('bolsasdisponiveis');
    Route::get('showBolseiros', [BolsaController::class, 'showBolseiros'])->name('showBolseiros');
    Route::get('showSolicitacoes', [BolsaController::class, 'showSolicitacoes'])->name('showSolicitacoes');

    Route::get('crudPadrinho', [PadrinhoController::class, 'index'])->name('crudPadrinho');
    Route::get('pageDoacao', [PadrinhoController::class, 'pageDoacao'])->name('pageDoacao');

    Route::get('perfil', [PerfilController::class, 'index'])->name('perfil');

    Route::get('login', [AutenticacaoController::class, 'index'])->name('login');
    Route::get('pageRegistar', [AutenticacaoController::class, 'pageRegistar'])->name('pageRegistar');
});
