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
       
        foreach ($partidas as $partida) {
            $acertos = $partida->quests()->wherePivot('acertou', true)->count();
        };

        return $partidas;
    }
}
