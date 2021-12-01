<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'org',
        'img',
        'dataNas',
        'lattes' 
    ];

    protected $hidden=[
        'idProf',
        'email',
        'senha',
        'isValidado'
    ];

    public function quests(){

        return $this->hasMany(Quest::class);
    }
}
