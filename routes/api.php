<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\RespostaController;
use App\Http\Controllers\AuthController;


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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {


    Route::post('/logout', 'AuthController@logout');
    Route::post('/refresh', 'AuthController@refresh');
    Route::post('/me', 'AuthController@me');

});
Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'jwt.verify'], function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    

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
});


Route::get('/v1/pessoas', [PessoaController::class, 'index']);
Route::post('/v1/pessoas', [PessoaController::class, 'store']);
Route::put('/v1/pessoas/{id}', [PessoaController::class, 'update']);
Route::delete('/v1/pessoas/{id}', [PessoaController::class, 'destroy']);

//Rotas API para Pesquisa
Route::get('/v1/pesquisas', [PesquisaController::class, 'index']);
Route::post('/v1/pesquisas', [PesquisaController::class, 'store']);
Route::put('/v1/pesquisas/{id}', [PesquisaController::class, 'update']);
Route::delete('/v1/pesquisas/{id}', [PesquisaController::class, 'destroy']);

//Rotas API para Resposta
Route::get('/v1/respostas', [RespostaController::class, 'index']);
Route::post('/v1/respostas', [RespostaController::class, 'store']);
Route::put('/v1/respostas/{id}', [RespostaController::class, 'update']);
Route::delete('/v1/respostas/{id}', [RespostaController::class, 'destroy']);