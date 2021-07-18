<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDocumentsTable extends Migration
{
    public function up(): void
    {
        Schema::create('user_documents', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->comment('Пользователь')->constrained()->cascadeOnDelete();;
            $table->string('number')->comment('Номер счета');
            $table->date('date_end')->nullable()->comment('Дата окончания подписки');
            $table->date('date_renew')->nullable()->comment('Дата продления подписки');
            $table->string('pdf')->nullable()->comment('Файл в формате pdf');
            $table->string('xlsx')->nullable()->comment('Файл в формате xlsx');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_documents');
    }
}
