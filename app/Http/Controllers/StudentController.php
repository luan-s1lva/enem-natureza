<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        return view('student');
    }

    public function store(Request $request){
        $estudantes = new Student;
        
        $estudantes->email = $request->email;
        $estudantes->password = Hash::make($request->password); 
        $estudantes->org = $request->org;
        $estudantes->name = $request->name;
        $estudantes->dataNas = $request->dataNas;
        $estudantes->serie = $request->serie;

        $estudantes->save();
        
        return redirect('/')->with('msg','Aluno cadastrado com sucesso!');
    }
    
    public function show($id)
    {
        $aluno = Student::findOrFail($id);

        return view('student', ['aluno' => $aluno]);
    }
}