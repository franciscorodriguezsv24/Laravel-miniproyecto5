<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    use HasFactory;

    public function clases(){
        return $this->belongsToMany(Curso::class, 'curso_maestros');
    }
    public $timestamps = false;
}
