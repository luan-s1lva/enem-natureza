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

    public function mostrar()
    {
        $user = session()->get('usuario')->id;
        //$horas = Matche::where('student_id', $user)->take(1)->get();
        $partidas = Matche::where('student_id', $user)->orderBy('horario', 'desc')->get();
        /*$certas = count(
            foreach(){
                quests()->pivot
            }
        );*/
        //dd($certas);

        return view('matches', compact('partidas'));
    }
}
