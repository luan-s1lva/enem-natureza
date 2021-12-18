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

        if ($request->hasfile('img') && $request->file('img')->isValid()) {
            $requestImg = $request->img;
            $extesion = $requestImg->extension();
            $imageName = md5($requestImg->getClientOriginalName() . strtotime('now') . '.' . $extesion);
            $request->img->move(public_path('img/perfil'), $imageName);
            $professor->img = $imageName;
        }
        $professor->save();
        
        return redirect('/')->with('msg','Professor cadastrado com sucesso!');;
    }

    public function show($id)
    {
        $professor = Teacher::findOrFail($id);

        return view('teacher', ['professor' => $professor]);
    }
}
