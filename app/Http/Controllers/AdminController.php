<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function solicitacoes()
    {
        $professores = Teacher::where('isValidado', 0)->get();
        return view('autorizeTeacher', compact('professores'));
    }
    public function validar(Request $request)
    {
        $professor = Teacher::find($request->id);
        $professor->isValidado = $request->isValidado;
        if ($professor->isValidado == 1) {
            Mail::send(new \App\Mail\aprovarProfessor($professor));
            $professor->save();
        } else {
            Mail::send(new \App\Mail\recusarProfessor($professor));
            $professor->delete();
        };

        return redirect('/solicitacoes');
    }
}
