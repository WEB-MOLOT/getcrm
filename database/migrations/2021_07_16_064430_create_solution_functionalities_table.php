<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionFunctionalitiesTable extends Migration
{
    public function up(): void
    {
        Schema::create('data_solution_functionalities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('solution_id')->comment('Решение')
                ->constrained('data_solutions')
                ->onDelete('cascade');

            $table->string('name')->comment('Значение');
            $table->unsignedSmallInteger('order')->default(0)->comment('Порядок сортировки');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_solution_functionalities');
    }
}
