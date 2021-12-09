<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        if (!session()->has('usuario')) {
            return view('login');
        } else {
            if (session()->get('tipo') == 'estudante') {
                return view('student');
            } else if (session()->get('tipo') == 'professor') {
                return view('teacher');
            } else {
                return view('admin');
            }
        }
    }

    public function check(Request $request)
    {
        $email = $request->email;
        $senha = $request->password;

        $estudante = Student::where('email', $email)->first();
        if ($estudante != null && Hash::check($senha, $estudante->password)) {
            session(['usuario' => $estudante, 'tipo' => 'estudante']);
        } else {
            $professor = Teacher::where('email', $email)->first();
            if ($professor != null && Hash::check($senha, $professor->password)) {
                session(['usuario' => $professor, 'tipo' => 'professor']);
            } else {
                $admin = Admin::where('email', $email)->first();
                if ($admin != null && Hash::check($senha, $admin->password)) {
                    session(['usuario' => $admin, 'tipo' => 'admin']);
                }
            }
        }
        if (session()->has('usuario')) {
            return redirect('/');
        }
        return redirect('/')->with('msg','Email ou Senha Incorretos!');
    }

    public function logout(Request $request) {
        session()->flush();
        return redirect('/');
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
