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
        Schema::create('ekstrakurikuler', function (Blueprint $table) {
           $table->integer('id_ekskul', true);
           $table->string('nama_ekskul', 60)->nullable(false);
           $table->string('slogan', 100)->nullable(false);
           $table->text('sejarah')->nullable(false);
           $table->text('foto')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekstrakurikuler');
    }
};
