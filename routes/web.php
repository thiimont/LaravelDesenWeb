<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

# Páginas estáticas
Route::get('/', [AppController::class, 'home']);
Route::get('/sobre', [AppController::class, 'sobre']);

# Contato
Route::get('/contato', [AppController::class, 'contato']);
Route::get('/listacontatos', [AppController::class, 'listacontatos']);

Route::post('/enviarcontato', [AppController::class, 'enviarcontato']);
Route::delete('/excluircontato/{id}', [AppController::class, 'excluircontato']);

# Lista de produtos e adicionar produtos
Route::get('/produtos', [AppController::class, 'produtos']);
Route::get('/listaprodutos', [AppController::class, 'listaprodutos']);
Route::get('/frmproduto', [AppController::class, 'frmproduto']);
Route::get('/frmeditproduto/{id}', [AppController::class, 'frmeditproduto']);

Route::post('/addproduto', [AppController::class, 'addproduto']);
Route::put('/atualizarproduto/{id}', [AppController::class, 'atualizarproduto']);
Route::delete('/excluirproduto/{id}', [AppController::class, 'excluirproduto']);

# Adicionar usuários
Route::get('/frmusuario', [AppController::class, 'frmusuario']);

Route::post('/addusuario', [AppController::class, 'addusuario']);

# Lista de usuários e ações
Route::get('/listausuarios', [AppController::class, 'listausuarios']);
Route::get('/frmeditusuario/{id}', [AppController::class, 'frmeditusuario']);

Route::put('/atualizarusuario/{id}', [AppController::class, 'atualizarusuario']);
Route::delete('/excluirusuario/{id}', [AppController::class, 'excluirusuario']);

# Login
Route::get('/frmlogin', [AppController::class, 'frmlogin']);
Route::get('/dashboard', [AppController::class, 'dashboard']);
Route::get('/logout', [AppController::class, 'logout']);

Route::post('/logar', [AppController::class, 'logar']);