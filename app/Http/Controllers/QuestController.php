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
        return view("quest", ['disciplinas' => Discipline::all(), 'temas' => Theme::all()]);
    }

    public function store(Request $request)
    {
        $pergunta = new Quest;
        $pergunta->textQuest = $request->editor1;
        $pergunta->dificulty = $request->dificulty;
        $pergunta->teacher_id = $request->session()->get('id');
        $pergunta->theme_id = $request->tema_id;
        $pergunta->save();

        foreach ($request->alt_txt as $index => $texto) {
            $correta = false;
            if ($index == $request->alt_cert) {
                $correta = true;
            }
            $pergunta->alternatives()->save(new Alternative([
                'texto' => $texto,
                'isTrue' => $correta
            ]));
        }

        return redirect("/");
    }

    public function listar_temas($id)
    {
        $discipline = Discipline::find($id);
        return $discipline->temas()->get();

        if ($id != null) {
            return $discipline->temas()->get();
        }
        return [];
    }

    public function listar_perguntasProf()
    {
        return view('listPerguntasProf', ['perguntas' => Quest::all()]);
    }

    public function listarPerguntas()
    {
        return view('salvasQuests',['perguntas'=>Quest::all()]);
        
    }

    public function editarPergunta($id)
    {
        return view('editarQuest');
        $editPergunta = Quest::find($id);
    }
}
