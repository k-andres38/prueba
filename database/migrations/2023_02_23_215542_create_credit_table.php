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
        Schema::create('credit', function (Blueprint $table) {
            $table->string('n_pagare');
            $table->string('monto_credito');
            $table->string('cuota_inicial');
            $table->string('tasa_interes');
            $table->string('cuota_mensuales');
            $table->date('fecha_desembolso');
            $table->date('fecha_credito');
            $table->text('observaciones');
            $table->unsignedBigInteger('client_id')->unique();
            $table->foreign('client_id')->references('id')->on('client')->onDelete('cascade');
            

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit');
    }
};
