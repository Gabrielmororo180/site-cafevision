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
       Schema::table('analasy_history', function (Blueprint $table) {
            $table->double('unripe', 8, 2)->nullable();
            $table->double('semi_ripe', 8, 2)->nullable();
            $table->double('ripe', 8, 2)->nullable();
            $table->double('overripe', 8, 2)->nullable();
            $table->double('dry', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('analasy_history', function (Blueprint $table) {
            //
        });
    }
};
