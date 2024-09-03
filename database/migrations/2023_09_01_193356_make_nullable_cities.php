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
        Schema::table('cities', function (Blueprint $table) {
            $table->string('house')->nullable()->change();
            $table->string('food')->nullable()->change();
            $table->string('art')->nullable()->change();
            $table->string('song')->nullable()->change();
            $table->string('clothes')->nullable()->change();
            $table->string('destination')->nullable()->change();
            $table->string('history')->nullable()->change();
            $table->string('commodity')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->string('house')->nullable(false)->change();
            $table->string('food')->nullable(false)->change();
            $table->string('art')->nullable(false)->change();
            $table->string('song')->nullable(false)->change();
            $table->string('clothes')->nullable(false)->change();
            $table->string('destination')->nullable(false)->change();
            $table->string('history')->nullable(false)->change();
            $table->string('commodity')->nullable(false)->change();
        });
    }
};
