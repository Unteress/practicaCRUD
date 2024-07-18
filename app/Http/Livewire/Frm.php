<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Frm extends Component
{
    public $name;
    public $password;
    public $email;
    
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:3'
    ];

    public function clear(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function submit()
    {
        // Execution doesn't reach here if validation fails.
        $this->validate();
        
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password) // Recuerda encriptar la contraseña
        ]);

        // Clear the input fields after saving
        $this->clear();

        // Emit an event to refresh the user table
        $this->emit('userAdded');
    }

    public function render()
    {
        return view('livewire.frm');
    }
}
