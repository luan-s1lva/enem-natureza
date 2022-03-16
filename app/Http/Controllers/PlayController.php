<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quest;
use App\Models\Alternative;
use App\Models\Matche;
use Carbon\Carbon;

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
        return view('playQ', compact('result'));///Retornar o array para a view playQ    
    }

    public function sortearEspecifico(Request $request)
    {
        $ids = $request->ids;
        $query = Quest::with(['alternatives', 'theme', 'theme.discipline']);
        foreach ($ids as $id)
        {
            $query->orWhere('theme_id', $id);
        }
        $qtd = $query->count();
        $result = $query->get()->random($qtd >= 12 ? 12 : $qtd)->shuffle();
        return $result;
    } 
    
    public function pontuar(Request $request)
    {
        $usuario = session()->get('usuario');
        $usuario->xp += $request->pontos;
        
        $partida = new Matche(['horario' => Carbon::now()]);
        $usuario->matches()->save($partida);

        for($i = 0; $i < sizeof($request->responses); $i++){
            $partida->quests()->attach($request->responses[$i][0], ['acertou' => $request->responses[$i][1]]);
        }

        $usuario->save();
        return true;
    }
}
