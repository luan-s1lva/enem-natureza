<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $fillable = [
        'theme',
    ];

    public function discipline(){
        
        return $this->belongsTo(Discipline::class);
    }

    public function perguntas(){

        return $this->hasMany(Quest::class);
    }
}
