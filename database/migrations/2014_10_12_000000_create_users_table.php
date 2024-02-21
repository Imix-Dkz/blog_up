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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //Integer Unsigned Increment
            $table->string('name'); //varchar, puede limitarse el tamaño
            //$table->string('name', 100); Limitado
            $table->string('email')->unique(); //Solo puede habuer un correo así
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //$table->string('avatar');
            $table->rememberToken(); //varchar 100, con un token
            $table->timestamps(); //create_at, update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('users');
    }
};
