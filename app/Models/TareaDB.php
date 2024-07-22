<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareaDB extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'tareasDB';

    // Atributos que son asignables en masa
    protected $fillable = [
        'nombreTarea',
        'description',
        'horasRequeridas',
    ];
}
