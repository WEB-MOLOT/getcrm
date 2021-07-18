<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Название');
            $table->string('subtitle')->nullable()->comment('Подзаголовок');
            $table->string('image')->nullable()->comment('Изображение');
            $table->string('video')->nullable()->comment('Видео');
            $table->text('description')->nullable()->comment('Описание');
            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solutions');
    }
}
