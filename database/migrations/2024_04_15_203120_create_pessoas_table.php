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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('bi')->unique()->nullable();
            $table->string('genero')->nullable();
            $table->date('data_nascimento');
            $table->enum('origem', ['Interno', 'Externo']);
            $table->enum('tipo', ['Professor', 'Estudante', 'Visitante']);
            $table->string('telefone')->nullable();
            $table->string('turma')->nullable(); //caso for estudante interno
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
