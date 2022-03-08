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
        'theme_id'
    ];

    protected $guarded = [];
    
    protected $hidden = [
        'id', 
        'teacher_id'
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function teacher(){

        return $this->belongsTo(Teacher::class);
    } 

    public function alternatives(){

        return $this->hasMany(Alternative::class);
    }

    public function matche(){

        return $this->belongsToMany(Matche::class);
    }

}
