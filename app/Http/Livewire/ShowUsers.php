<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public function render()
    {
        $usuarios = User::all();
        return view('livewire.show-users', compact('usuarios'));
    }
}
