<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoDataTable extends Migration
{
    public function up(): void
    {
        Schema::create('seo_data', function (Blueprint $table) {
            $table->id();

            $table->morphs('seoable');
            $table->string('title')->nullable()->comment('Тег title');
            $table->string('keywords')->nullable()->comment('Тег meta[keywords]');
            $table->string('description')->nullable()->comment('Тег meta[description]');
            $table->boolean('disable_index')->default(0)->comment('Запретить индексацию страницы');

            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seo_data');
    }
}
