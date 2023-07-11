<?php

namespace App\Http\Livewire;

use App\Models\Alumno;
use Livewire\Component;

class ShowAlumnos extends Component
{
    public $searchAlumnos;

    public function render()
    {
        $alumnos = Alumno::where("Nombre", "LIKE", "%" .$this->searchAlumnos. "%")->orWhere("Correo","LIKE", "%" .$this->searchAlumnos. "%")->get();


        return view('livewire.show-alumnos', compact('alumnos'));
    }
}
