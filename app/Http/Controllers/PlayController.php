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

        $perguntas = Quest::all()->random();
        $alternative = new Alternative;
        $alternativas[] = Alternative::where($perguntas->id = $alternative->quest_id)->get('texto');     
        //$alternativas[] = Alternative::select('texto')->get();

        $posicao = -1;

        /*foreach($alternativas as $alternative){
            if($perguntas->id == $alternative->quest_id){
                //$posicao = $alternative->id;        
            }
        }*/ 
      
        return view ('playQ',['perguntas' => $perguntas , 'alternativas' => $alternativas , 'alternative' => $alternative]);
    }

}
