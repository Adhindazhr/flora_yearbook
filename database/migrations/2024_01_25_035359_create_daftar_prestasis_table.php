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
        Schema::create('daftar_prestasi', function (Blueprint $table) {
            $table->integer('id_daftar_prestasi', true);
            $table->integer('id_ekskul', false)->index('idEkskul');
            $table->string('nama_prestasi', 60)->nullable(false);

            $table->foreign('id_ekskul')->on('ekstrakurikuler')->references('id_ekskul')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_prestasi');
    }
};
