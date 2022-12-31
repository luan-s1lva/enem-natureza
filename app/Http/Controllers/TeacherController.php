<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class TeacherController extends Controller
{
    function index()
    {
        return view("teacher");
    }

    public function store(Request $request)
    {
        $estudante = new Student;
        $professor = new Teacher;

        $professor->name = $request->name;
        if ($professor::where('email', $request->email)->first() || $estudante::where('email', $request->email)->first()) {
            return redirect('/cadastro')->with('msg2', 'O email inserido já foi cadastrado nessa plataforma! Tente Novamente com outro Email. ');
        } else {
            $professor->email = $request->email;
            $professor->org = $request->org;
            $professor->dataNas = $request->dataNas;
            $professor->lattes = $request->lattes;
            $professor->password = Hash::make($request->password);
            $professor->lattes = $request->lattes;

            if ($request->hasfile('img') && $request->file('img')->isValid()) {
                $requestImg = $request->img;
                $extesion = $requestImg->extension();
                $imageName = md5($requestImg->getClientOriginalName() . strtotime('now') . '.' . $extesion);
                $request->img->move(public_path('img/perfil'), $imageName);
                $professor->img = $imageName;
            }
            $professor->save();
                 Mail::send(new \App\Mail\newProfessor($professor));
            return redirect('/')->with('msg', 'Professor cadastrado com sucesso! Aguarde o sistema confirmar sua identidade!');
        }
    }

    public function show($id)
    {
        $professor = Teacher::findOrFail($id);

        return view('teacher', ['professor' => $professor]);
    }
}
