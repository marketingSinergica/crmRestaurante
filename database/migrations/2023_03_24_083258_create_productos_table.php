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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('cantidad');
            $table->string('formato');
            $table->string('comentario',1000)->nullable();
            $table->string('marca')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('proveedor_id')->nullable()->constrained();
            $table->foreignId('pedido_id')->nullable()->constrained();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
