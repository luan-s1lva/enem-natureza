<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatcheController extends Controller
{
    public function index(){
        return view("matches");
    }
}