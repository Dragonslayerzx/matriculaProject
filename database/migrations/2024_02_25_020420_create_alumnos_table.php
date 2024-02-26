<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            //estructura de nuestra tabla
            $table->id('codigoAlumno'); //sera int con primaryKey con nombre codigoAlumno
            $table->string('nombre', 50);
            $table->string('apellido', 50); //funciones tipo Varchar definimos longitud maxima
            $table->string('correo',100);
            $table->string('telefono',100);
            $table->text('direccion',1000);
            $table->integer('codigoCarrera');
            //$table->timestamps(); //Borrar si es necesario
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
