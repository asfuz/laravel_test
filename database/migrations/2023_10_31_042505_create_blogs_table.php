<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            // Каждая статья должна иметь превью картинкой, заголовок, текст, дату создания и автора.
            $table->string('preview_img'); //url
            $table->string('title');
            $table->text('body')->nullable();
            $table->string('author');
            $table->foreignId('user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
