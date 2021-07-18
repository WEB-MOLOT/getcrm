<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger('type')->comment('');
            $table->foreignId('page_id')->comment('Страница')->constrained();
            $table->string('name')->comment('Пункт меню');
            $table->unsignedSmallInteger('order')->default(100)->comment('Сортировка');

            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
}
