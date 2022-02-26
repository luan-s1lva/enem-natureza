<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discipline;

class CreateQuizController extends Controller
{
    public function index(){
        return view("creatingQuiz");
    }

    public function mostrarAssuntos($idDiscipline) {
        $discipline = Discipline::find($idDiscipline);
        $result = [];
        if ($discipline != null) {
            $result = $discipline->temas()->get();
        }
        return $result;
    }
}
