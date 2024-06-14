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
        Schema::create('oretans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('2019');
            $table->integer('2020');
            $table->integer('2021');
            $table->integer('2022');
            $table->integer('2023');
            $table->integer('2024');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oretans');
    }
};
