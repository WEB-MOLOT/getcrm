<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->comment('Покупатель')->constrained()->cascadeOnDelete();
            $table->morphs('reviewable');

            $table->text('text')->comment('Отзыв');
            $table->unsignedDecimal('score', 2, 1)->comment('Средняя оценка');
            $table->unsignedDecimal('score_development', 2, 1)->comment('Качество разработки');
            $table->unsignedDecimal('score_usability', 2, 1)->comment('Юзабилити');
            $table->unsignedDecimal('score_team', 2, 1)->comment('Квалификация команды');
            $table->unsignedDecimal('score_budget', 2, 1)->comment('Бюджет');
            $table->unsignedDecimal('score_deadlines', 2, 1)->comment('Сроки');
            $table->boolean('is_moderated')->default(0)->comment('Отзыв проверен');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
}
