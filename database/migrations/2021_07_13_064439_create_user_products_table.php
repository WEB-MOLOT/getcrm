<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('user_products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->comment('Пользователь')->constrained();
            $table->string('name')->comment('Название продукта');
            $table->timestamp('finished_at')->index()->comment('Дата окончания лицензии или подписки');
            $table->string('code')->comment('Код лицензии');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_products');
    }
}
