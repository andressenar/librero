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
        Schema::create('ejemplars', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('localizacion');
            $table->unsignedBigInteger('libro_id')->nullable();
            $table->foreign('libro_id')
            ->references('id')->on('libros')
            ->onDelete('cascade');
            
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejemplars');
    }
};
