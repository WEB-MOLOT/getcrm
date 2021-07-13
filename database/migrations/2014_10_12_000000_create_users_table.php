<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ФИО');
            $table->string('firm')->comment('Компания');
            $table->string('position')->nullable()->comment('Должность');
            $table->string('phones')->nullable()->comment('Телефоны');
            $table->string('email')->unique()->comment('Адрес электронной почты');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login_at')->comment('Дата последнего входа');
            $table->string('password')->comment('Пароль');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('is_admin')->default(0)->index()->comment('Администратор');
            $table->foreignId('company_id')->nullable()->comment('Компания')->constrained();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
