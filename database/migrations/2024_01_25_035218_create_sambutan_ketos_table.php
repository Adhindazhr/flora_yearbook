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
        Schema::create('sambutan_ketos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama_ketos', 60)->nullable(false);
            $table->text('kata_sambutan')->nullable(false);
            $table->text('foto_ketos')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sambutan_ketos');
    }
};
