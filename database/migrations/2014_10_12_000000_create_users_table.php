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
            $table->string('firm')->nullable()->comment('Компания');
            $table->string('position')->nullable()->comment('Должность');
            $table->string('phones')->nullable()->comment('Телефоны');
            $table->string('email')->unique()->comment('Адрес электронной почты');
            $table->boolean('has_subscription')->default(0)->index()->comment('Включена ли подписка');
            $table->string('subscribe_email')->nullable()->comment('Адрес электронной почты для подписки на рассылку');
            $table->boolean('is_admin')->default(0)->index()->comment('Администратор');
            $table->boolean('is_active')->default(1)->index()->comment('Пользователь активен');
            $table->foreignId('company_id')->nullable()->comment('Компания')->constrained();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login_at')->nullable()->comment('Дата последнего входа');
            $table->string('password')->comment('Пароль');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
