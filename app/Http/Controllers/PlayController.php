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

    public function assunto(Request $request){
        $ids = $request->temas; //pega os ids dos temas escolhidos
        $result = ["ids" => $ids];//resultado vai seo array dos ids escolhidos
        return view('playQ', $result);///Retornar o array para a view playQ    
    }

    public function sortearEspecifico(Request $request)
    {
        //$qtd = Quest::count();
        $query = Quest::with(['alternatives', 'theme', 'theme.discipline'])
        ->join('themes','themes.id', '=', 'quests.theme_id')
        ->select('quests.*');
        $ids = $request->json('ids');
        return $ids;
    }    
}
