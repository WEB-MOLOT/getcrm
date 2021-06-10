<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuccessStoriesTable extends Migration
{
    public function up(): void
    {
        Schema::create('success_stories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->string('image')->nullable()->comment('Изображение');
            $table->string('logo')->nullable()->comment('Логотип');
            $table->tinyText('short_about')->nullable()->comment('Краткая информация о компании');
            $table->text('tasks')->nullable()->comment('Проблематика и вызовы');
            $table->text('solution')->nullable()->comment('Решение');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('success_stories');
    }
}
