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
        Schema::create('city_attributes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cityId')->unsigned()->nullable(false);
            $table->bigInteger('attributeId')->unsigned()->nullable(false);
            $table->string('attributeName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city_attributes');
    }
};
