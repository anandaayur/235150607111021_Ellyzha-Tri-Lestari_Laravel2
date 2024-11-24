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
        // Menambahkan pengecekan apakah tabel blogs sudah ada
        if (!Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $table) {
                $table->id();
                $table->string('judul');        // Tambahkan kolom judul
                $table->text('isi');            // Tambahkan kolom isi
                $table->string('pembuat');      // Tambahkan kolom pembuat
                $table->string('image')->nullable(); // Tambahkan kolom image, bisa kosong
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

