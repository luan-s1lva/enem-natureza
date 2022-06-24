<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matche;

class MatcheController extends Controller
{
    public function index()
    {
        return view("matches");
    }

   /* public function mostrar()
    {
        $user = session()->get('usuario')->id;
        $partidas = Matche::where('student_id', $user)->orderBy('horario', 'desc')->get();
        return view('matches', compact('partidas'));
    }*/
    
    public function mostrarPartidas()
    {
        $user = session()->get('usuario')->id;
        $partidas = Matche::where('student_id', $user)->get();
       
        $acertou = 0;
        $errou = 0;

        foreach($partidas as $partida) {
            $acertou+=$partida->quests()->wherePivot('acertou', true)->count();
            $errou+=$partida->quests()->wherePivot('acertou', false)->count();
        }
        return ["acertos" => $acertou, "erros" => $errou];
    }
}
