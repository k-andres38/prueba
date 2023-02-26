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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('nit_cc');
            $table->string('ciudad');
            $table->string('direccion');
            

            $table->string('telefono');
            $table->string('contacto');
            $table->string('cupo_total');
            $table->string('cupo_disponible');
            $table->string('dias_gracia');
           
            $table->enum('estado',['Activo','Inactivo']);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
