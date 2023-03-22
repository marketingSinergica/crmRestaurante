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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombreRestaurante');
            $table->date('fechaPedido');
            $table->date('fechaEntrega');
            //$table->string('productos');
            $table->string('estado')->default('Pendiente');
            $table->double('cantidadProductos');
            $table->double('importeTotal');
            $table->string('comentarioCocina');
            $table->string('comentarioProveedor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
