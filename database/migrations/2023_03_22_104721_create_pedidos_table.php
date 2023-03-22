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
            $table->string('estado');
            $table->int('cantidadProductos');
            $table->double('importeTotal');
            $table->text('comentarioCocina');
            $table->text('comentarioProveedor');
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
