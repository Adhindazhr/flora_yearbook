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
        Schema::create('data_user_siswa', function (Blueprint $table) {
            $table->integer('id_siswa', true);
            $table->integer('id_akun', false)->index('idAkun');
            $table->integer('id_kelas', false)->index('idKelas');
            $table->string('nama', 60)->nullable(false);
            $table->string('instagram', 60)->nullable(false);
            $table->string('linkedin', 60)->nullable(false);
            $table->string('kesan', 40)->nullable(false);
            $table->string('pesan', 255)->nullable(false);
            $table->text('foto_siswa')->nullable(false);

            $table->foreign('id_akun')->on('akun')->references('id_akun')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_kelas')->on('kelas')->references('id_kelas')->onUpdate('cascade')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_user_siswa');
    }
};
