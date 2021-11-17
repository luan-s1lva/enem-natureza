<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitation extends Model
{
    use HasFactory;
    protected $fillable = [
        'isAllowed',
        'nome',
        'org',
        'lattes',
    ];

    protected $hidden = [
        'email',
        'senha',
    ];

    public function teachers(){

        return $this->hasMany(Teacher::class);
    }

    public function admins(){

        return $this->belongsTo(Admin::class);
    } 
}
