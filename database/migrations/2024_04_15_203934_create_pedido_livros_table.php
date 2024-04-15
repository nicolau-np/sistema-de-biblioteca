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
        Schema::create('pedido_livros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pessoa_id');
            $table->unsignedBigInteger('livro_id');
            $table->unsignedBigInteger('user_id');
            $table->date('data_do_pedido');
            $table->date('data_de_devolucao');
            $table->text('obs')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
            $table->foreign('livro_id')->references('id')->on('livros')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_livros');
    }
};
