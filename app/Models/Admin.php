<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'idAdmin',
        'nome',
    ];

    protected $hidden = [
        'email',
        'senha',
    ];

    public function solicitations(){

        return $this->hasMany(Solicitaion::class);
    }
}
