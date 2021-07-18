<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformsTable extends Migration
{
    public function up(): void
    {
        Schema::create('data_platforms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Название');
            $table->text('description')->comment('Описание');
            $table->timestamps();
            $table->softDeletes()->index();
        });

        Schema::create('platform_solution', function (Blueprint $table) {
            $table->foreignId('solution_id')->comment('Решение')->constrained('data_solutions');
            $table->foreignId('platform_id')->comment('Платформа')->constrained('data_platforms');

            $table->unique([
                'solution_id',
                'platform_id',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('platform_solution');
        Schema::dropIfExists('data_platforms');
    }
}
