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
        Schema::create('alumno_servicios', function (Blueprint $table) {
            $table->id();
            $table->integer("nivel");
            $table->foreignId("servicio_id")->constrained();
            $table->integer("cantidad");
            $table->foreignId("alumno_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno_servicios');
    }
};
