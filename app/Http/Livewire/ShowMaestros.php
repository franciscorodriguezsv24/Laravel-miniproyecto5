<?php

namespace App\Http\Livewire;

use App\Models\Maestro;
use Livewire\Component;

class ShowMaestros extends Component
{
    public $searchMaestros;

    public function render()
    {
        $maestros = Maestro::where("Nombre", "LIKE", "%" .$this->searchMaestros. "%")->orWhere("Correo","LIKE", "%" .$this->searchMaestros. "%")->get();


        return view('livewire.show-maestros', compact('maestros'));
    }
}