<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use Livewire\Component;

class ShowCursos extends Component
{
    public $searchCursos;

    public function render()
    {
        $cursos = Curso::where("Clase", "LIKE", "%" .$this->searchCursos. "%")->get();


        return view('livewire.show-cursos', compact('cursos'));
    }
}