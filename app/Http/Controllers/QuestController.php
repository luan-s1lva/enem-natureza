<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Alternative;
use App\Models\Discipline;
use App\Models\Theme;
use App\Models\Quest; 

class QuestController extends Controller
{
    function index()
    {
        return view("quest");
    }

    public function store(Request $request){
        $perguntas = new Quest;
        
        $perguntas->textQuest = $request->editor;
        $perguntas->dificulty = $request->dificulty;
        $perguntas->teacher_id = $request->session()->get('id');
        $perguntas->theme_id = $request->assuntos; //é assuntos o nome do seleenvie láct é assim que pega o valor
        $perguntas->save();
            

        return redirect("/");
            
    }
}
