<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;
    protected $fillable = [
        'dificulty',
        'textQuest',
        'theme'
    ];
    protected $hidden = [
        'idQuest', 
        'idTeacher'
    ];
}
