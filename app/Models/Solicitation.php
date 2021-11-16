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
}
