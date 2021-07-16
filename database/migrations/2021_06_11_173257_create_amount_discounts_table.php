<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmountDiscountsTable extends Migration
{
    public function up(): void
    {
        Schema::create('data_amount_discounts', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('from_amount')->comment('Сумма от');
            $table->unsignedInteger('to_amount')->comment('Сумма до');
            $table->unsignedInteger('discount')->comment('Скидка');
            $table->unsignedInteger('order')->default(100)->comment('Порядок сортировки');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_amount_discounts');
    }
}
