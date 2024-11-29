<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('weather_favorites', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->string('country'); 
            $table->float('temperature'); 
            $table->string('weather_description');
            $table->float('humidity');
            $table->float('wind_speed');
            $table->string('wind_dir');
            $table->string('observation_time');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather_favorites');
    }
};
