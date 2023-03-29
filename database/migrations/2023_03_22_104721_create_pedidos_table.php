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
            $table->date('fechaPedido');
            $table->date('fechaEntrega');
            $table->string('estado')->default('Pendiente');
            $table->double('cantidadProductos');
            $table->string('comentarioCocina', 1000)->nullable();
            //$table->string('restaurante_id');
            $table->softDeletes();
            $table->foreignId('proveedor_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
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
