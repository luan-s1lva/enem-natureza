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
        $teachers = new teacher;

        $teachers->name = $request->name;
        $teachers->email = $request->email; 
        $teachers->org = $request->org;
        $teachers->password = $request->password;
        $teachers->lattes = $request->lattes;

        $teachers->save();
        
        return redirect('/');
    }
}
