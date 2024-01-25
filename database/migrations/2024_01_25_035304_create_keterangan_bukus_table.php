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
        Schema::create('keterangan_buku', function (Blueprint $table) {
         $table->integer('id', true);
         $table->string('nama_sekolah', 60)->nullable(false);
         $table->integer('angkatan', false)->nullable(false);
         $table->text('foto_sekolah')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangan_buku');
    }
};
