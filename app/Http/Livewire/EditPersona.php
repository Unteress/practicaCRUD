<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosTrabajador;
use App\Models\TareaDB;

class EditPersona extends Component
{
    public $userId;
    public $nombre;
    public $horasTrabajo;
    public $tareaAsignada;
    public $numCedula;
    public $mostrarFormulario = false;
    public $tareas;

    protected $rules = [
        'nombre' => 'required|min:3',
        'horasTrabajo' => 'required|numeric',
        'numCedula' => 'required|unique:datosTrabajador,numCedula,' . 'id',
        'tareaAsignada' => 'required|exists:tareasDB,id'
    ];

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->loadTrabajador();
        $this->loadTareas();
    }

    public function loadTrabajador()
    {
        $trabajador = DatosTrabajador::find($this->userId);
        if ($trabajador) {
            $this->nombre = $trabajador->nombre;
            $this->horasTrabajo = $trabajador->horasTrabajo;
            $this->numCedula = $trabajador->numCedula;
            $this->tareaAsignada = $trabajador->tareaAsignada;
        }
    }

    public function loadTareas()
    {
        $this->tareas = TareaDB::all();
    }

    public function mostrarFormulario()
    {
        $this->mostrarFormulario = true;
    }

    public function actualizar()
    {
        $this->validate();

        $trabajador = DatosTrabajador::find($this->userId);

        if ($trabajador) {
            $trabajador->update([
                'nombre' => $this->nombre,
                'horasTrabajo' => $this->horasTrabajo,
                'numCedula' => $this->numCedula,
                'tareaAsignada' => $this->tareaAsignada
            ]);

            $this->emit('trabajadorActualizado');
            $this->mostrarFormulario = false; // Ocultar el formulario después de actualizar
        } else {
            $this->emit('errorActualizacion', 'Trabajador no encontrado.');
        }
    }

    public function render()
    {
        return view('livewire.edit-persona');
    }

    protected $listeners = ['tareaCreada' => 'loadTareas']; // Escuchar el evento para actualizar tareas
}
