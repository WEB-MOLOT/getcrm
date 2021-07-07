<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBlocksTable extends Migration
{
    public function up(): void
    {
        Schema::create('page_blocks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('page_id')->comment('')->constrained();
            $table->string('type')->comment('');
            $table->string('slug')->comment('');
            $table->boolean('is_visible')->default(1)->comment('');
            $table->text('content')->nullable()->comment('');

            $table->unique([
                'page_id',
                'slug',
            ]);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_blocks');
    }
}
