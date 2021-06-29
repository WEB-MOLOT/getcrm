<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSolutionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('data_solutions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Название');
            $table->text('description')->comment('Описание');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_solutions');
    }
}
