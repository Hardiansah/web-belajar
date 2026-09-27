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
        Schema::create('siswa', function (Blueprint $table) {
            $table->unsignedInteger('nis')->primary();
            $table->string('kelas', 10);
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('nis')->references('nis')->on('siswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['nis']);
        });
        Schema::dropIfExists('siswa');
    }
};
