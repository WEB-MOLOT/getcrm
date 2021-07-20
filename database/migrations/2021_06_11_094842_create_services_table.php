<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->foreignId('solution_id')->comment('')->constrained('data_solutions');

            $table->string('title')->comment('Название');
            $table->string('subtitle')->nullable()->comment('Подзаголовок');
            $table->string('image')->nullable()->comment('Изображение');
            $table->string('video')->nullable()->comment('Видео');
            $table->text('description')->nullable()->comment('Описание');
            $table->unsignedSmallInteger('order')->default(100)->comment('Сортировка в меню');
            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
}
