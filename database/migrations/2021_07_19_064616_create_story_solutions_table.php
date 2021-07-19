<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorySolutionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('story_solutions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('success_story_id')->comment('История успеха')->constrained()->cascadeOnDelete();
            $table->string('line')->comment('Информация для вывода');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('story_solutions');
    }
}
