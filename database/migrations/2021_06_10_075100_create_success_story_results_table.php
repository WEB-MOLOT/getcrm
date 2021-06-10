<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuccessStoryResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('success_story_results', function (Blueprint $table) {
            $table->id();
            $table->string('before')->nullable()->comment('Изображение до');
            $table->string('after')->nullable()->comment('Изображение после');
            $table->string('description')->nullable()->comment('Описание');
            $table->foreignId('success_story_id')->comment('')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('success_story_results');
    }
}
