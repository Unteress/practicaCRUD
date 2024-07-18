<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class TablePersona extends Component
{
    public $usuarios;

    protected $listeners = ['userAdded' => 'refreshUsers', 'usuarioEliminado' => 'refreshUsers', 'usuarioActualizado' => 'refreshUsers'];
    
    public function refreshUsers()
    {
        $this->usuarios = User::all();
    }

    public function mount()
    {
        $this->usuarios = User::all();
    }

    public function render()
    {
        return view('livewire.table-persona');
    }
}
