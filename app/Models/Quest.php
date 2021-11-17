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

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function teachers(){

        return $this->belongsTo(Teacher::class);
    } 

    public function alternatives(){

        return $this->hasMany(Alternative::class);
    }

}
