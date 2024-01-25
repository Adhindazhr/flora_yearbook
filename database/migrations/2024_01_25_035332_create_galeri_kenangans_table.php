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
        Schema::create('galeri_kenangan', function (Blueprint $table) {
          $table->integer('id_foto', true);
          $table->integer('id_kelas', false)->index('idKelas');
          $table->text('foto')->nullable(false);
          $table->string('deskripsi', 255)->nullable(false);

          $table->foreign('id_kelas')->on('kelas')->references('id_kelas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri_kenangan');
    }
};
