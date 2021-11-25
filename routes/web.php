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

Route::get('/cadastro', [CadastroController::class, 'index']);
Route::post('/',[StudentController::class, 'store']);

Route::get('/professor', [TeacherController::class, 'index']);

Route::get('/professor/criarPergunta', [QuestController::class, 'index']);

Route::get('/estudante', [StudentController::class, 'index']);

Route::get('estudante/ranking', [RankingController::class, 'index']);

Route::get('estudante/criarQuiz', [CreateQuizController::class, 'index']);

Route::get('estudante/play', [PlayController::class, 'index']);

Route::get('estudante/historico', [MatcheController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('admin/solicitacoes', [SoliciacionsController::class, 'index']);
