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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('banner', 255)->required();
            $table->string('tags', 15)->nullable();
            $table->timestamp('date_publish')->nullable();
            $table->string('title', 255)->required();
            $table->text('subtitle')->required();
            $table->text('news_subject')->required();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
