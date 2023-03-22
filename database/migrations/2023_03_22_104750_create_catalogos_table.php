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
        Schema::create('catalogos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('imagen');
            $table->string('nombreProducto');
            $table->string('descripcion');
            //$table->string('proveedoresRelacionados');
            $table->string('comentarios');
            //$table->double('precio');
            $table->string('formato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogos');
    }
};
