<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;

class CreateQuizController extends Controller
{
    public function index(){
        return view("creatingQuiz");
    }

    public function mostrarAssuntos() {

        return view("creatingQuiz", ['temas' => Theme::all()]);
    }
}
