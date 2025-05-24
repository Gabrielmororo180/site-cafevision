<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguration extends Migration
{
    public function up()
    {
        Schema::create('configuration', function (Blueprint $table) {
            $table->id();
            $table->double('unripe')->nullable();
            $table->double('semi_ripe')->nullable();
            $table->double('ripe')->nullable();
            $table->double('overripe')->nullable();
            $table->double('dry')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('configuration');
    }
}
