<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TareaDB;

class AgregarTarea extends Component
{
    public $nameTarea;
    public $description;
    public $horasRequeridas;

    protected $rules = [
        'nameTarea' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'horasRequeridas' => 'required|string|max:255',
    ];

    public function submit()
{
    $this->validate();

    $tarea = TareaDB::create([
        'nombreTarea' => $this->nameTarea,
        'description' => $this->description,
        'horasRequeridas' => $this->horasRequeridas,
    ]);

    session()->flash('message', 'Tarea creada exitosamente.');

    // Emitir un evento para actualizar otros componentes
    $this->emit('tareaCreada');

    // Reiniciar los campos
    $this->reset(['nameTarea', 'description', 'horasRequeridas']);
}

    public function render()
    {
        return view('livewire.agregar-tarea');
    }
}
