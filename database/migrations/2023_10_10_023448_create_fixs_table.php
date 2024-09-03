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
        Schema::create('fixs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('city1')->unsigned()->nullable(false);
            $table->bigInteger('city2')->unsigned()->nullable(false);
            $table->bigInteger('city3')->unsigned()->nullable(false);
            $table->bigInteger('city4')->unsigned()->nullable(false);
            $table->bigInteger('city5')->unsigned()->nullable(false);
            $table->bigInteger('city6')->unsigned()->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixs');
    }
};
