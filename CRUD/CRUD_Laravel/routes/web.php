<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CandidatoController;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;

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
# Página inicial
Route::prefix('candidatos')->group(function () {
    Route::get('/', [CandidatoController::class, 'index'])->name('candidatos-index');
    Route::get('/create', [CandidatoController::class, 'create'])->name('candidatos-create');
    Route::post('/create', [CandidatoController::class, 'store'])->name('candidatos-store');
    Route::get('/{id}/edit', [CandidatoController::class, 'edit'])->where('id', '[0-9]+')->name('candidatos-edit');
    Route::put('/{id}', [CandidatoController::class, 'update'])->where('id', '[0-9]+')->name('candidatos-update');
    Route::delete('/candidatos/{id}', [CandidatoController::class, 'destroy'])->name('candidatos-destroy');
});

Route::fallback(function()
{
    return "Erro!";
});