<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['Clase'];

    public $timestamps = false;

    public function maestros(){
        return $this->belongsToMany(Maestro::class, 'curso_maestros');
    }
}
