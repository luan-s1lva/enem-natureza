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

Route::get('/', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/playing', function () {
    return view('playQ');
});

Route::get('/teacher', function () {
    return view('teacher');
});

Route::get('/creatingQuest', function () {
    return view('quest');
});

Route::get('/student', function () {
    return view('student');
});

Route::get('/ranking', function () {
    return view('ranking');
});

Route::get('/creatingQuiz', function () {
    return view('creatingQuiz');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/solicitations', function(){
    return view('autorizeTeacher');
});

Route::get('/partidas', function () {
    return view('matches');
});