<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitacionsController extends Controller
{
    public function index(){
        return view("autorizeTeacher");
    }
}
