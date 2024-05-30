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
        Schema::create('tenistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('pais');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->integer('altura');
            $table->integer('peso');
            $table->date('fecha_debut');
            $table->enum('mano', ['diestro', 'zurdo'])->nullable()->default('diestro');
            $table->enum('reves', ['una_mano', 'dos_manos'])->nullable()->default('una_mano');
            $table->string('entrenador');
            $table->integer('dinero_ganado');
            $table->integer('mejor_ranking');
            $table->integer('num_victorias');
            $table->integer('num_derrotas');
            $table->string('imagen')->default('https://via.placeholder.com/150');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenistas');
    }
};
