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
        Schema::dropIfExists('personal_access_tokens');
        Schema::create('teacher_and_staffs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ein')->required();
            $table->string('name', 100)->required();
            $table->string('gender', 10)->required();
            $table->string('photo', 100)->required();
            $table->string('facebook', 50);
            $table->string('instagram', 50);
            $table->string('email', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_and_staffs');
    }
};
