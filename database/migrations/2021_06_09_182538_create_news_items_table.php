<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsItemsTable extends Migration
{
    public function up(): void
    {
        Schema::create('news_items', function (Blueprint $table) {
            $table->id();

            $table->dateTime('published_at')->nullable()->index()->comment('Дата публикации');
            $table->string('slug')->unique()->comment('Заголовок');
            $table->string('title')->comment('Заголовок');
            $table->text('description')->comment('Анонс');
            $table->text('content')->comment('Содержание');
            $table->string('image')->comment('Изображение');

            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news_items');
    }
}
