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
        Schema::create('data_user_guru', function (Blueprint $table) {
            $table->integer('id_guru', true);
            $table->integer('id_akun', false)->index('idAkun');
            $table->string('nama', 60)->nullable(false);
            $table->string('jabatan', 60)->nullable(false);
            $table->text('foto_guru')->nullable(false);

            $table->foreign('id_akun')->on('akun')->references('id_akun')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_user_guru');
    }
};
