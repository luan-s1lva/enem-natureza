<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quest;
use App\Models\Alternative;

class PlayController extends Controller
{
    public function index()
    {
        return view('playQ');
    }

    public function sortearAll()
    {
        $qtd = Quest::count();
        return Quest::with(['alternatives', 'theme', 'theme.discipline'])->get()->random($qtd >= 12 ? 12 : $qtd)->shuffle();
    }

    public function sortearEspecifico(Request $request)
    {
        //divisao por assuntos
    }
}
