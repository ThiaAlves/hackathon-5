<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\RespostaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Rotas API para Pessoa
Route::get('/pessoas', [PessoaController::class, 'index']);
Route::post('/pessoas', [PessoaController::class, 'store']);
Route::put('/pessoas/{id}', [PessoaController::class, 'update']);
Route::delete('/pessoas/{id}', [PessoaController::class, 'destroy']);

//Rotas API para Pesquisa
Route::get('/pesquisas', [PesquisaController::class, 'index']);
Route::post('/pesquisas', [PesquisaController::class, 'store']);
Route::put('/pesquisas/{id}', [PesquisaController::class, 'update']);
Route::delete('/pesquisas/{id}', [PesquisaController::class, 'destroy']);

//Rotas API para Resposta
Route::get('/respostas', [RespostaController::class, 'index']);
Route::post('/respostas', [RespostaController::class, 'store']);
Route::put('/respostas/{id}', [RespostaController::class, 'update']);
Route::delete('/respostas/{id}', [RespostaController::class, 'destroy']);
