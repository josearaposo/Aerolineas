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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->foreignId('aero_origen')->constrained('aeropuertos');
            $table->foreignId('aero_destino')->constrained('aeropuertos');
            $table->foreignId('companya_id')->constrained();
            $table->dateTime('hora_salida');
            $table->dateTime('hora_llegada');
            $table->integer('plazas');
            $table->decimal('precio', 6, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
