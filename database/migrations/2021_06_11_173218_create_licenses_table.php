<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    public function up(): void
    {
        Schema::create('data_licenses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('service_id')->nullable()->comment('Сервис')->constrained('data_services');
            $table->unsignedSmallInteger('pre_id')->nullable()->comment('Пререквизит, ссылка на другую лицензию');
            $table->unsignedSmallInteger('recommendation_id')->nullable()->comment('Рекомендация, ссылка на другую лицензию');

            $table->string('name')->comment('Наименование');
            $table->string('metric')->comment('Метрика');
            $table->string('metric_value')->comment('Значение метрики');
            $table->unsignedMediumInteger('metric_period')->comment('Срок метрики, мес.');
            $table->unsignedMediumInteger('price')->comment('Цена (US$) в год');
            $table->unsignedMediumInteger('quantity')->comment('Кол-во');
            $table->string('support')->comment('Техподдержка');
            $table->string('line')->comment('Линия бизнеса');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_licenses');
    }
}
