<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    public function up(): void
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->text('content')->comment('Содержание');
            $table->string('hh')->nullable()->comment('Ссылка на HH');
            $table->json('params')->nullable()->comment('Параметры');
            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
}
