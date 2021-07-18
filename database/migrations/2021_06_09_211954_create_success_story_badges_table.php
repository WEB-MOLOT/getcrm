<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuccessStoryBadgesTable extends Migration
{
    public function up(): void
    {
        Schema::create('success_story_badges', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->string('value')->nullable()->nullable()->comment('Значение');
            $table->foreignId('success_story_id')->comment('')->constrained();
            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('success_story_badges');
    }
}
