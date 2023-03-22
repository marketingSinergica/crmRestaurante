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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombreRestaurante');
            $table->string('telefono');
            $table->string('horarioRecpPedidos'); //horario de recepcion de pedidos
            $table->string('direccion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes');
    }
};
