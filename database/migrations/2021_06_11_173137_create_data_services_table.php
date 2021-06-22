<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_services', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Название');
            $table->text('description')->comment('Описание');
            $table->timestamps();
        });

        Schema::create('platform_service', function (Blueprint $table) {
            $table->foreignId('platform_id')->comment('Решение')->constrained('data_platforms');
            $table->foreignId('service_id')->comment('Решение')->constrained('data_services');

            $table->unique([
                'platform_id',
                'service_id',
            ]);
        });

        Schema::create('service_solution', function (Blueprint $table) {
            $table->foreignId('service_id')->comment('Решение')->constrained('data_services');
            $table->foreignId('solution_id')->comment('Платформа')->constrained('data_solutions');

            $table->unique([
                'solution_id',
                'service_id',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_solution');
        Schema::dropIfExists('platform_service');
        Schema::dropIfExists('data_services');
    }
}
