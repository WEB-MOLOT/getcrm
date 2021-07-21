<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionDescriptionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('solution_descriptions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('solution_id')->comment('Решение')->constrained('solutions')->cascadeOnDelete();

            $table->text('description')->comment('Описание');
            $table->string('icon')->comment('Иконка');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solution_descriptions');
    }
}
