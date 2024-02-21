<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{   //Migración para agregar/quitar la columna status en la tabla cursos, despues de la columna categoria...
    
    public function up(): void{ // Run the migrations.
        Schema::table('cursos', function (Blueprint $table) {
            $table->string('status')->default('0')->after('categoria');
        });
    }

    public function down(): void{ // Reverse the migrations.
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
