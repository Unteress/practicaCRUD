<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class DeletePersona extends Component
{
    public $userId;

    public function mount($userId)
    {
        $this->userId = $userId;
    }

    public function eliminar()
    {
        $user = User::find($this->userId);
        if ($user) {
            $user->delete();
            $this->emit('usuarioEliminado'); // Emitir evento para actualizar la tabla
        }
    }

    public function render()
    {
        return view('livewire.delete-persona');
    }
}
