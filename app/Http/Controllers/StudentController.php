<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('student');
    }

    public function store(Request $request){
        $estudantes = new Student;
        
        $estudantes->email = $request->email;
        $estudantes->password = $request->password;
        $estudantes->org = $request->org;
        $estudantes->name = $request->name;
        $estudantes->age = $request->age;
        $estudantes->serie = $request->serie;

        $estudantes->save();
        
        return redirect('/');
    }
}
