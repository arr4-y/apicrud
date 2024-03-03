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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->longText("foto");
            $table->string("nombre");
            $table->string("apellido");
            $table->date("estudiante_fecnac");
           // $table->unsignedBigInteger("estudiante_edad");
            $table->string("estudiante_dni", 10);
            $table->string("estudiante_telf", 15);
            $table->string("email", 100);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
