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
        Schema::create('torneos', function (Blueprint $table) {
            $table->id()->primary()->unique();
            $table->string('ubicacion');
            $table->enum('modalidad', ['Individual', 'Dobles', 'Individual y Dobles'])->nullable()->default('Individual');
            $table->enum('mano', ['Master1000', 'Master200','Master350'])->nullable()->default('Master1000');
            $table->enum('superficie', ['duro', 'hierba','arcilla'])->nullable()->default('diestro');
            $table->foreignId('vacantes')->references('id')->on('tenistas');
            $table->string('premios');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('imagen')->default('https://');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneos');
    }
};
