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

            $table->string('name')->comment('Имя фильтра');
            $table->unsignedSmallInteger('order')->default(0)->comment('Порядок сортировки');

            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_filters');
    }
}
