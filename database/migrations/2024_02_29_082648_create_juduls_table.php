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
        Schema::create('juduls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('users');
            $table->text('judul_penelitian');
            $table->foreignId('program_studi_id')->constrained('program_studis');
            $table->string('tahun_angkatan');
            $table->string('tahun_ajaran');
            $table->integer('semester');
            $table->string('lembar_persetujuan');
            $table->date('tanggal_upload');
            $table->string('dosen_pembimbing1');
            $table->string('dosen_pembimbing2')->nullable();
            $table->string('dosen_pembimbing3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juduls');
    }
};
