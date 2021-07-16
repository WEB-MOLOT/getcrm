<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilterValuesTable extends Migration
{
    public function up(): void
    {
        Schema::create('data_filter_values', function (Blueprint $table) {
            $table->id();

            $table->foreignId('filter_id')->comment('')
                ->constrained('data_filters')
                ->onDelete('cascade');

            $table->string('name')->comment('Значение');
            $table->unsignedSmallInteger('order')->default(0)->comment('Порядок сортировки');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_filter_values');
    }
}
