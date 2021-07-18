<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodDiscountsTable extends Migration
{
    public function up(): void
    {
        Schema::create('data_period_discounts', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('from_period')->comment('Период от');
            $table->string('from_unit')->comment('В чем измерять период от');
            $table->unsignedInteger('to_period')->comment('Период до');
            $table->string('to_unit')->comment('В чем измерять период до');
            $table->unsignedInteger('discount')->comment('Скидка');
            $table->unsignedInteger('order')->default(100)->comment('Порядок сортировки');

            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_period_discounts');
    }
}
