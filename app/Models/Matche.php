<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;
    protected $fillable = [
      'horario',
      'student_id'  
    ];

    public function student(){

      return $this->belongsTo(Student::class);
    }

    public function quests(){

      return $this->belongsToMany(Quest::class)->withPivot('acertou');
    }
}
