<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiltersTable extends Migration
{
    public function up(): void
    {
        Schema::create('data_filters', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('type')->comment('Тип фильтра');
            $table->string('label')->comment('Значение');
            $table->unsignedTinyInteger('key')->comment('Ключ');
            $table->timestamps();

            $table->unique([
                'type',
                'key'
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_filters');
    }
}
