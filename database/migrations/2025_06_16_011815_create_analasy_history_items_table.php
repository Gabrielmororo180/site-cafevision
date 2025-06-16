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
        Schema::create('analasy_history_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_analasy_history')
                  ->constrained('analasy_history') // 'analasy_histories' é o nome da tabela pai
                  ->onDelete('cascade'); // Se a análise pai for deletada, os itens também serão

            // 'json' - Coluna para armazenar dados em formato JSON
            $table->json('json')->nullable();

            // Colunas para os valores numéricos da análise
            $table->float('unripe')->nullable();
            $table->float('semi_ripe')->nullable();
            $table->float('ripe')->nullable();
            $table->float('overripe')->nullable();
            $table->float('dry')->nullable();

            // 'num' - Coluna para um número genérico
            $table->integer('num')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analasy_history_items');
    }
};
