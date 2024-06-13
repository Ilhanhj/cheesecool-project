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
        Schema::create('calon_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jurusan_id');
            $table->string('nama');
            $table->string('asal_sekolah');
            $table->integer('nilai_test');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_mahasiswas');
    }
};
