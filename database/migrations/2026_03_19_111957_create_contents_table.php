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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');

            $table->foreignId('chapter_id')->nullable();
            $table->foreignId('text_id')->nullable();
            $table->foreignId('exercise_id')->nullable();
            $table->foreignId('technical_concept_id')->nullable();
            $table->foreignId('publication_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
