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
        Schema::create('pengajuan_juduls', function (Blueprint $table) {
            $table->id();
            $table->text('judul_penelitian');
            $table->foreignId('program_studi_id')->constrained('program_studis');
            $table->string('tahun_ajaran');
            $table->string('semester');
            $table->date('tanggal_upload');
            $table->string('dosen_pembimbing1');
            $table->string('dosen_pembimbing2');
            $table->string('dosen_pembimbing3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_juduls');
    }
};
