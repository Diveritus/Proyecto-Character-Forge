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
        Schema::create('_character_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id'); // Clave foránea para relacionar con el personaje
            $table->integer('fuerza');
            $table->integer('destreza');
            $table->integer('constitucion');
            $table->integer('inteligencia');
            $table->integer('sabiduria');
            $table->integer('carisma');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_character_stats');
    }
};
