<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionFiltersTable extends Migration
{
    public function up(): void
    {
        Schema::create('data_solution_filters', function (Blueprint $table) {
            $table->id();

            $table->foreignId('solution_id')
                ->comment('Решение из справочника')
                ->constrained('data_solutions')
                ->cascadeOnDelete();

            $table->json('params')->comment('Связь с фильтрами');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_solution_filters');
    }
}
