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
        Schema::create('ejemplar_usuario', function (Blueprint $table) {
            $table->id();
            

            $table->unsignedBigInteger('ejemplar_id');
            $table->foreign('ejemplar_id')
            ->references('id')->on('ejemplars')
            ->onDelete('cascade');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')
            ->references('id')->on('usuarios')
            ->onDelete('cascade');

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejemplar_usuario');
    }
};
