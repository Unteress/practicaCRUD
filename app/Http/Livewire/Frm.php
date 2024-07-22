<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosTrabajador;
use App\Models\TareaDB;

class FRM extends Component
{
    public $nombre;
    public $horasTrabajo;
    public $tareaAsignada;
    public $numCedula;
    public $tareas;
    public $errorMessage;

    protected $rules = [
        'nombre' => 'required|min:3',
        'horasTrabajo' => 'required|numeric',
        'numCedula' => 'required|max:10 ',
        'tareaAsignada' => 'required|exists:tareasDB,id'
    ];

    public function mount()
    {
        $this->tareas = TareaDB::all();
    }

    public function submit()
    {
        $this->errorMessage = ''; // Limpiar mensaje de error

        try {
            $this->validate();

            DatosTrabajador::create([
                'nombre' => $this->nombre,
                'horasTrabajo' => $this->horasTrabajo,
                'tareaAsignada' => $this->tareaAsignada,
                'numCedula' => $this->numCedula
            ]);

            $this->emit('trabajadorAgregado');
            $this->reset();
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->errorMessage = 'Error de validación: ' . $e->getMessage();
        } catch (\Exception $e) {
            $this->errorMessage = 'Hubo un error al agregar el trabajador: ' . $e->getMessage();
        }
    }

    public function render()
    {
        // Actualiza $tareas antes de renderizar la vista
        $this->tareas = TareaDB::all();
        return view('livewire.frm');
    }
}
