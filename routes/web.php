<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\PresencaController;
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

Route::get('/adicionar-presencas', [PresencaController::class, 'adicionarPresencas'])->name('adicionar.presencas');
Route::get('/observar-total', [PresencaController::class, 'observarTotal'])->name('observar.total');
Route::get('/relatorios', 'RelatorioController@index')->name('relatorios.index');

Route::get('/rota-que-requer-admin', function () {
    // Código da rota
})->middleware('checkRole:admin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'checkRole:admin'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Rotas para Disciplinas
Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/create', [DisciplinaController::class, 'create']);
Route::post('/disciplinas', [DisciplinaController::class, 'store']);
Route::get('/disciplinas/{disciplina}', [DisciplinaController::class, 'show']);
Route::get('/disciplinas/{disciplina}/edit', [DisciplinaController::class, 'edit']);
Route::put('/disciplinas/{disciplina}', [DisciplinaController::class, 'update']);
Route::delete('/disciplinas/{disciplina}', [DisciplinaController::class, 'destroy']);

// Rotas para Alunos
Route::get('/alunos', [AlunoController::class, 'index']);
Route::get('/alunos/create', [AlunoController::class, 'create']);
Route::post('/alunos', [AlunoController::class, 'store']);
Route::get('/alunos/{aluno}', [AlunoController::class, 'show']);
Route::get('/alunos/{aluno}/edit', [AlunoController::class, 'edit']);
Route::put('/alunos/{aluno}', [AlunoController::class, 'update']);
Route::delete('/alunos/{aluno}', [AlunoController::class, 'destroy']);

// Rotas para Presenças
Route::get('/presencas', [PresencaController::class, 'index']);
Route::get('/presencas/create', [PresencaController::class, 'create']);
Route::post('/presencas', [PresencaController::class, 'store']);
Route::get('/presencas/{presenca}', [PresencaController::class, 'show']);
Route::get('/presencas/{presenca}/edit', [PresencaController::class, 'edit']);
Route::put('/presencas/{presenca}', [PresencaController::class, 'update']);
Route::delete('/presencas/{presenca}', [PresencaController::class, 'destroy']);