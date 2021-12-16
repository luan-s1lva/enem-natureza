<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class RankingController extends Controller
{
    public function index(){
        return view("ranking");
    }

    public function show(){
        if (session()->has('usuario')) {
            return view("ranking",session()->all());    
        }
    }
}
