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
           
            $table->dropColumn([
                'id',
                'id_analasy_history',
                'json',
                'unripe',
                'semi_ripe',
                'ripe',
                'overripe',
                'dry',
                'num'
            ]);
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('analasy_histories', function (Blueprint $table) {
            //
        });
    }
};
