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
                $view = 'student';
            } else if (session()->get('tipo') == 'professor') {
                $view = 'teacher';
            } else {
                $view = 'admin';
            }
            return view($view, ['usuario' => session()->get('usuario')]);
        }
    }

    public function check(Request $request)
    {
        $email = $request->email;
        $senha = $request->password;

        $estudante = Student::where('email', $email)->first();
        if ($estudante != null && Hash::check($senha, $estudante->password)) {
            session(['usuario' => $estudante, 'tipo' => 'estudante', 'nome' => $estudante->nome]);
        } else {
            $professor = Teacher::where('email', $email)->first();
            if ($professor != null && Hash::check($senha, $professor->password)) {
                session(['usuario' => $professor, 'tipo' => 'professor', 'nome'=>$professor->nome, 'id'=>$professor->id]);
            } else {
                $admin = Admin::where('email', $email)->first();
                if ($admin != null && Hash::check($senha, $admin->password)) {
                    session(['usuario' => $admin, 'tipo' => 'admin', $admin->nome]);
                }
            }
        }
        if (session()->has('usuario')) {
            return redirect('/');
        }
        return redirect('/')->with('msg2','Email ou Senha incorretos!');
    }

    public function logout(Request $request) {
        session()->flush();
        return redirect('/');
    }
}
