<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'nome',
        'org',
        'xp',
        'serie',
        'idade',
        'img',
    ];

    protected $hidden = [
        'email',
        'senha',
        'idAluno',
    ];

    public function matches(){

        return $this->belongsTo(Matche::class);
    }
}
