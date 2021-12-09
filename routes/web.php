<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\MatcheController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\SolicitacionsController;
use App\Http\Controllers\PlayController;
use App\Http\Controllers\CreateQuizController;

Route::get('/', [LoginController::class, 'index']);

Route::post('/login/check',[LoginController::class, 'check']);

Route::get('/logout',[LoginController::class, 'logout']);

Route::get('/cadastro', [CadastroController::class, 'index']);

Route::post('/student/store',[StudentController::class, 'store']); 

Route::post('/teacher/store',[TeacherController::class, 'store']);

Route::middleware('autenticacao:professor')->group(function() {

    Route::get('/professor/criarPergunta', [QuestController::class, 'index']);

});

Route::middleware('autenticacao:estudante')->group(function() {

    Route::get('/estudante/{id}', [StudentController::class, 'show'])/*->middleware('token-validation')*/;

    Route::get('/estudante/{id}/ranking', [RankingController::class, 'index']);
    
    Route::get('/estudante/{id}/criarQuiz', [CreateQuizController::class, 'index']);
    
    Route::get('/estudante/{id}/play', [PlayController::class, 'index']);
    
    Route::get('/estudante/{id}/historico', [MatcheController::class, 'index'])/*->middleware('token-validation')*/;

});

Route::middleware('autenticacao:admin')->group(function() {

    Route::get('/admin/solicitacoes', [SoliciacionsController::class, 'index']);

});

