<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosTrabajador', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('horasTrabajo');
            $table->string('tareaAsignada');
            $table->string('numCedula')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('datosTrabajador');
    }
};
