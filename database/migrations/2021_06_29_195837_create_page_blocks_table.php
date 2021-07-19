<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBlocksTable extends Migration
{
    public function up(): void
    {
        Schema::create('page_blocks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('page_id')->comment('Страница')->constrained();
            $table->string('label')->comment('Заголовок для поля');
            $table->string('type')->comment('Тип');
            $table->string('slug')->comment('Слаг');
            $table->boolean('is_visible')->default(1)->comment('Отображать на странице');
            $table->text('content')->nullable()->comment('Содержание');

            $table->unique([
                'page_id',
                'slug',
            ]);

            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_blocks');
    }
}
