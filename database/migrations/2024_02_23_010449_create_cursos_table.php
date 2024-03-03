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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->integer("horas");
            $table->unsignedBigInteger("docente_id")->nullable(); // Assuming this field represents the ID of the teacher associated with the course
            $table->unsignedBigInteger("grado_id")->nullable(); // Assuming this field represents the ID of the grade associated with the course
            $table->foreign("docente_id")->references("id")->on("docentes")->onDelete("set null");
            $table->foreign("grado_id")->references("id")->on("grado")->onDelete("set null");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
