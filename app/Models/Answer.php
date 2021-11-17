<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'isTrue',
    ];

    protected $hidden = [
        'idAnswer',
        'idAlterna',
    ];

    public function alternatives(){

        return $this->hasMany(Alternative::class);
    }
}
