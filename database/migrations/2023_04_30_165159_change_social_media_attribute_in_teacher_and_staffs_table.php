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
        Schema::table('teacher_and_staffs', function (Blueprint $table) {
            $table->string('facebook', 50)->nullable()->change();
            $table->string('instagram', 50)->nullable()->change();
            $table->string('email', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teacher_and_staffs', function (Blueprint $table) {
            $table->string('facebook', 50)->unique()->change();
            $table->string('instagram', 50)->unique()->change();
            $table->string('email', 50)->unique()->change();
        });
    }
};
