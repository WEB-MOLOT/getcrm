<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStandartsTable extends Migration
{
    public function up(): void
    {
        Schema::create('service_standarts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('service_id')->comment('Услуга')->constrained('services')->cascadeOnDelete();

            $table->string('title')->comment('Заголовок');
            $table->string('icon')->comment('Иконка');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_standarts');
    }
}
