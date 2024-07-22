<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosTrabajador;

class TablePersona extends Component
{
    public $datosTrabajador;
    public $cedulaFilter = '';

    protected $listeners = [
        'trabajadorAgregado' => '$refresh', 
        'trabajadorActualizado' => '$refresh', 
        'trabajadorEliminado' => '$refresh'
    ];

    public function mount()
    {
        $this->filterData();
    }

    public function filterData()
    {
        $this->datosTrabajador = DatosTrabajador::when($this->cedulaFilter, function($query) {
            return $query->where('numCedula', $this->cedulaFilter);
        })->get();
    }

    public function updatedCedulaFilter()
    {
        $this->filterData();
    }

    public function render()
    {
        return view('livewire.table-persona');
    }
}
