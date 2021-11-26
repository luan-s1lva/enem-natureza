<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index()
    {
        return view("teacher");
    }

    public function store(Request $request){
        $professor = new Teacher;

        $professor->name = $request->name;
        $professor->email = $request->email; 
        $professor->org = $request->org;
        $professor->idade = $request->idade;
        $professor->lattes = $request->lattes;
        $professor->password = $request->password;
        $professor->lattes = $request->lattes;

        $professor->save();
        
        return redirect('/');
    }
}
