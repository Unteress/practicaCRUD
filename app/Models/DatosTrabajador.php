<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosTrabajador extends Model
{
    protected $table = 'datosTrabajador';
    
    protected $fillable = [
        'nombre', 'horasTrabajo', 'tareaAsignada', 'numCedula'
    ];

    public function tarea()
    {
        return $this->belongsTo(TareaDB::class, 'tareaAsignada', 'id');
    }
}
