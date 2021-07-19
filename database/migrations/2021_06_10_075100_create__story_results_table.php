<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoryResultsTable extends Migration
{
    public function up(): void
    {
        Schema::create('story_results', function (Blueprint $table) {
            $table->id();
            $table->string('before')->nullable()->comment('Изображение до');
            $table->string('after')->nullable()->comment('Изображение после');
            $table->string('description')->nullable()->comment('Описание');
            $table->foreignId('success_story_id')->unique()->comment('')->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('story_results');
    }
}
