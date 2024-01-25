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
        Schema::create('profil_sekolah', function (Blueprint $table) {
          $table->integer('id_profil', true);
          $table->integer('tahun_berdiri', false)->nullable(false);
          $table->string('alamat', 255)->nullable(false);
          $table->text('deskripsi')->nullable(false);
          $table->text('logo_sekolah')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_sekolah');
    }
};
