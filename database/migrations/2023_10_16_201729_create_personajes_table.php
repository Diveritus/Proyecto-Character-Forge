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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('raza');
            $table->string('clase');
            $table->integer('puntos_de_golpe');
            $table->integer('puntos_de_golpe_temporales')->nullable();
            $table->string('trasfondo');
            $table->text('historia');
            $table->text('habilidades_especiales');
            $table->text('objetos_magico');
            
            // Claves foráneas
            /*$table->unsignedBigInteger('clase_id');
            $table->unsignedBigInteger('raza_id');
            $table->unsignedBigInteger('trasfondo_id');

            // Relaciones con clases, razas y trasfondos
            $table->foreign('clase_id')->references('id')->on('clases');
            $table->foreign('raza_id')->references('id')->on('razas');
            $table->foreign('trasfondo_id')->references('id')->on('trasfondos');
            */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};
