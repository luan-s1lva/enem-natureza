<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quest;
use App\Models\Alternative;

class PlayController extends Controller
{
    public function index(){
        return view("playQ");
    }

    public function sortear(){

        $perguntas = Quest::all()->random(1);
        $alternative = new Alternative;
        //$alternativas[] = Alternative::where($perguntas->id = $alternative->quest_id);     
        $alternativas[] = Alternative::select('texto')->get(); //TEM QUE PEGAR O ID DAS ALTERNATIVAS QUE TEM O MESMO QUEST_ID E COLOCA-LAS LA NO INDICE DO VETOR(O ID)
      


        return view ('playQ',['perguntas' => $perguntas , 'alternativas' => $alternativas]);
    }

}
