<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;


class RankingController extends Controller
{
    public function index(){
        return view("ranking");
    }

    public function show(){

        
        $alunos = Student::orderBy('xp','desc')->get();
        
        $posicao = 0;
        foreach($alunos as $indice => $aluno){
            if(session()->get('usuario')->id == $aluno->id){
                $posicao = $indice+1;

            }
        }
        return view("ranking",['alunos' => $alunos, 'posicao' => $posicao]);

    }
}