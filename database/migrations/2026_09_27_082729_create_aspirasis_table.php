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
        Schema::create('aspirasi', function (Blueprint $table) {
            $table->increments('id_aspirasi');
            $table->enum('status', ['Menunggu', 'Proses', 'Selesai']);
            
            // Kolom Foreign Key
            $table->unsignedInteger('id_kategori');
            $table->unsignedInteger('feedback'); 
    
            // Relasi
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirasi');
    }
};
