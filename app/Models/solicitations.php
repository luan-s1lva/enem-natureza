<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitations extends Model
{
    use HasFactory;
    protected $fillable = [
        'isAllowed',
        'nome',
        'org',
        'lattes',
    ];
}
