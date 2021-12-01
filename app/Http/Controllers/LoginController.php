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

    public function check(Request $request)
    {
        $estudante = new Student;
        $professor = new Teacher;
       
        $estudante->email = $request->email;
        $estudante->password = $request->password;

        $professor->email = $request->email;
        $professor->password = $request->password;
       
        $studentsEmail = DB::table('students')->pluck('email');
        $teachersEmail = DB::table('teachers')->pluck('email');

        $studentPass = DB::table('students')->pluck('password');
        $teachersPass = DB::table('teachers')->pluck('password');

        foreach($studentsEmail as $emailAluno)
        {
            if($emailAluno == $estudante->email){
                foreach($studentPass as $senhaEstudante){
                    if(password_verify($estudante->password, $senhaEstudante)){
                        return redirect('/estudante');
                    }
                }
            }
        }
        //return redirect('/')->with('msg','Email ou Senha Incorretos!');
        
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
    }
    /*
    public function checkTeacherPassword(Teacher $professor){
        
        $professor = new Teacher;

        $professor->email = $request->email;
        $professor->password = $request->password;

        $teachersEmail = DB::table('teachers')->pluck('email');
        $teachersPass = DB::table('teachers')->pluck('password');
        
        $teachersPass = DB::table('teachers')->pluck('password');

        foreach($teachersPass as $senhaProfessor){
            if(password_verify($professor->password, $senhaProfessor)){
                return redirect('/professor');
            }
        }

        return redirect('/')->with('msg','Email ou Senha Incorretos!'); 
    }

    public function checkStudentPassword(Student $student){
        $studentPass = DB::table('students')->pluck('password');

        foreach($studentsPass as $senhaEstudante){
            if(password_verify($studante->password, $senhaEstudante)){
                return redirect('/estudante');
            }
        }
    }
    */
}
