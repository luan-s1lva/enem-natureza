<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;


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
        $professor->dataNas = $request->dataNas;
        $professor->lattes = $request->lattes;
        $professor->password = Hash::make($request->password);
        $professor->lattes = $request->lattes;

        $professor->save();
        
        return redirect('/');
    }
}
