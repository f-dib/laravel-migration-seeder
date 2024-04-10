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
        Schema::table('trains', function (Blueprint $table) {
            
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->integer('number_of_carriages');
            $table->boolean('in_time');
            $table->boolean('deleted');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('company', 'departure_station', 'arrival_station', 'departure_time', 'arrival_time', 'train_code', 'number_of_carriages', 'in_time', 'deleted');
        });
    }
};
