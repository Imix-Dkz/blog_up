<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Run the migrations.
    public function up(): void
    { //Creación de la tabla para los cursos
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('descripcion');
            $table->text('categoria');
            $table->timestamps(); //create_at, update_at
        });
    }

    // Reverse the migrations.
    public function down(): void
    { //Da de baja la tabla
        Schema::dropIfExists('cursos');
    }
};
