<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('files');
    }
}
