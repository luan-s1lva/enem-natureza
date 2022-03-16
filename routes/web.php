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

Route::post('/login/check', [LoginController::class, 'check']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/cadastro', [CadastroController::class, 'index']);

Route::post('/student/store', [StudentController::class, 'store']);

Route::post('/teacher/store', [TeacherController::class, 'store']);

Route::post('/quest/store', [QuestController::class, 'store']);

Route::middleware('autenticacao:professor')->group(function () {

    Route::get('/criarPergunta', [QuestController::class, 'index']);

    Route::get('/temas/listar/{id}', [QuestController::class, 'listar_temas']);

    Route::get('/suasPerguntas', [QuestController::class, 'listar_perguntasProf']);

    Route::get('/editar/pergunta/{id}', [QuestController::class, 'edit']);
    
    Route::post('/quest/update/{{$pergunta->id}}', [QuestController::class, 'update']);

    Route::get('/listarPerguntas', [QuestController::class, 'listarPerguntas']);
});

Route::middleware('autenticacao:estudante')->group(function () {

    Route::get('/assuntos/listar/{idDiscipline}' , [CreateQuizController::class, 'mostrarAssuntos']);

    Route::get('/estudante/{id}', [StudentController::class, 'show']);

    Route::get('/ranking/mostrar', [RankingController::class, 'show']);

    Route::get('/criarQuiz', [CreateQuizController::class, 'index']);

    Route::get('/play', [PlayController::class, 'index']);
    Route::post('/play/assunto', [PlayController::class, 'assunto']);
    Route::get('/sortear', [PlayController::class, 'sortearAll']);
    Route::post('/sortear/especifico', [PlayController::class, 'sortearEspecifico']);
    Route::post('/play/pontuar', [PlayController::class, 'pontuar']);
    
    Route::get('/historico', [MatcheController::class, 'index']);
});

Route::middleware('autenticacao:admin')->group(function () {

    Route::get('/solicitacoes', [SoliciacionsController::class, 'index']);
});
