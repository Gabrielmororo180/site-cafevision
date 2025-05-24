<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalasyHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('analasy_history', function (Blueprint $table) {
            $table->id(); // cria o campo id como chave primária (auto incremento)
            $table->string('obs', 50)->nullable();
            $table->string('image_1', 100)->nullable();
            $table->string('image_2', 100)->nullable();
            $table->string('image_3', 100)->nullable();
            $table->json('json_api')->nullable();
            $table->integer('status')->nullable(); 
            $table->double('unripe')->nullable();
            $table->double('semi_ripe')->nullable();
            $table->double('ripe')->nullable();
            $table->double('overripe')->nullable();
            $table->double('dry')->nullable();
            $table->timestamps(); // adiciona created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('analasy_history');
    }
}

