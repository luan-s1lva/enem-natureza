<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function checkStudent(Request $request)
    {
        $estudante = new Student;
       
        $estudante->email = $request->email;
        $estudante->password = $request->password;
       
        $studentsEmail = DB::table('students')->pluck('email');
        $studentsPass = DB::table('students')->pluck('password');


        foreach($studentsEmail as $emailAluno)
        {
            if($emailAluno == $estudante->email){
                foreach($studentsPass as $senhaEstudante){
                    if(password_verify($estudante->password, $senhaEstudante)){
                        return redirect('/estudante');
                    }
                } 
              
            }
        }
        return redirect('/')->with('msg','Email ou Senha Incorretos!'); 
    }
    
    public function checkTeacher(Request $request){
        
        $professor = new Teacher;

        $professor->email = $request->email;
        $professor->password = $request->password;

        $teachersEmail = DB::table('teachers')->pluck('email');
        $teachersPass = DB::table('teachers')->pluck('password');

        foreach($teachersEmail as $emailProfessor)
        {
            if($emailProfessor == $professor->email){
                foreach($teachersPass as $senhaProfessor){
                    if(password_verify($professor->password, $senhaProfessor)){
                        return redirect('/professor');
                    }
                } 
              
            }
        }

        return redirect('/')->with('msg','Email ou Senha Incorretos!'); 
    }
}
