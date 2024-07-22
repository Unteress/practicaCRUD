<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosTrabajador;

class DeletePersona extends Component
{
    public $userId;
    public $confirming = false;

    public function mount($userId)
    {
        $this->userId = $userId;
    }

    public function confirmDelete()
    {
        $this->confirming = true;
    }

    public function delete()
    {
        DatosTrabajador::find($this->userId)->delete();

        // Emitir un evento para notificar a otros componentes
        $this->emit('trabajadorEliminado');

        // Restablecer estado
        $this->confirming = false;
    }

    public function render()
    {
        return view('livewire.delete-persona');
    }
}
