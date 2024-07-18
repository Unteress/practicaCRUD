<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class EditPersona extends Component
{
    public $userId;
    public $name;
    public $email;
    public $password;
    public $mostrarFormulario = false; // Variable para controlar la visibilidad del formulario

    public function mount($userId)
    {
        $this->userId = $userId;
        $user = User::find($userId);
        if ($user) {
            $this->name = $user->name;
            $this->email = $user->email;
            $this->password = $user->password;
        }
    }

    public function mostrarFormulario()
    {
        $this->mostrarFormulario = true;
    }

    public function actualizar()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        $user = User::find($this->userId);
        if ($user) {
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password)
            ]);
            $this->emit('usuarioActualizado');
            $this->mostrarFormulario = false; // Ocultar el formulario después de actualizar
        }
    }

    public function render()
    {
        return view('livewire.edit-persona');
    }
}
