<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function index()
    {
        return view('student');
    }

    public function store(Request $request)
    {
        $professores = new Teacher;
        $estudantes = new Student;
        if ($estudantes::where('email', $request->email)->first() || $professores::where('email', $request->email)->first()) {
            return redirect('/cadastro')->with('msg2', 'O email inserido já foi cadastrado nessa plataforma! Tente Novamente com outro Email. ');
        } else {
            $estudantes->email = $request->email;
            $estudantes->password = Hash::make($request->password);
            $estudantes->org = $request->org;
            $estudantes->name = $request->name;
            $estudantes->dataNas = $request->dataNas;
            $estudantes->serie = $request->serie;
            if ($request->hasfile('img') && $request->file('img')->isValid()) {
                $requestImg = $request->img;
                $extesion = $requestImg->extension();
                $imageName = md5($requestImg->getClientOriginalName() . strtotime('now') . '.' . $extesion);
                $request->img->move(public_path('img/perfil'), $imageName);
                $estudantes->img = $imageName;
            }
          //  Mail::send(new \App\Mail\newEstudante($estudantes));
            $estudantes->save();

            return redirect('/')->with('msg', 'Aluno cadastrado com sucesso!');
        }
    }

    public function show($id)
    {
        $aluno = Student::findOrFail($id);

        return view('student', ['aluno' => $aluno]);
    }
}
