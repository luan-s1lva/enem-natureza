<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    use HasFactory;
    protected $fillable = [
        'texto',
        'isTrue'
    ];

    protected $hidden = [
        'idAlterna',
        'quest_id',
        'isTrue',
    ];

    public function quests(){

        return $this->belongsTo(Quest::class);
    }
}
