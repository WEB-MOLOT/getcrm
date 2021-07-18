<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('section')->comment('Секция');
            $table->string('name')->unique()->comment('Наименование');
            $table->string('type')->comment('Тип поля для ввода данных');
            $table->text('value')->nullable()->comment('Значение');
            $table->string('title')->comment('Заголовок');
            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
}
