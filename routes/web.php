<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/sobre', function () {
    return 'Página Sobre';
});

Route::get('/alunos', function () {
    return 'Página de Alunos';
});

Route::get('/contato', function () {
    return 'Página de Contato';
});

Route::get('/produto/{id}', function ($id) {
    return 'Produto: ' . $id;
});

Route::get('/categoria/{id}', function ($id) {
    return 'Categoria: ' . $id;
});

Route::get('/usuario/{id}', function ($id) {
    return 'Usuário: ' . $id;
});

Route::get('/alunos', [AlunoController::class, 'index']);

Route::get('/alunos/{id}', [AlunoController::class, 'show']);

Route::get('/alunos/create', [AlunoController::class, 'create']);

Route::post('/alunos', [AlunoController::class, 'store']);

Route::get('/alunos/{id}/edit', [AlunoController::class, 'edit']);

Route::put('/alunos/{id}', [AlunoController::class, 'update']);

Route::delete('/alunos/{id}', [AlunoController::class, 'destroy']);