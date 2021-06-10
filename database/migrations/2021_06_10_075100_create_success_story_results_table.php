<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuccessStoryResultsTable extends Migration
{
    public function up(): void
    {
        Schema::create('success_story_results', function (Blueprint $table) {
            $table->id();
            $table->string('before')->nullable()->comment('Изображение до');
            $table->string('after')->nullable()->comment('Изображение после');
            $table->string('description')->nullable()->comment('Описание');
            $table->foreignId('success_story_id')->comment('')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('success_story_results');
    }
}
