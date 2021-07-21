<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionEffectsTable extends Migration
{
    public function up(): void
    {
        Schema::create('solution_effects', function (Blueprint $table) {
            $table->id();

            $table->foreignId('solution_id')->comment('Решение')->constrained('solutions')->cascadeOnDelete();

            $table->string('line1')->nullable()->comment('Строка 1');
            $table->string('line2')->nullable()->comment('Строка 2');
            $table->tinyInteger('fire')->default(0)->comment('Направление изменения');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solution_effects');
    }
}
