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
        Schema::create('publikasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('users');
            $table->string('judul');
            $table->string('urutan_penulis');
            $table->string('status');
            $table->string('jenis_jurnal');
            $table->string('nama_jurnal');
            $table->string('volume_dan_nomor');
            $table->string('halaman');
            $table->string('tahun');
            $table->string('link_dokumen');
            $table->string('judul_seminar');
            $table->string('urutan_penulis_seminar');
            $table->string('status_seminar');
            $table->string('jenis_seminar');
            $table->string('nama_seminar');
            $table->string('penyelenggara');
            $table->string('tahun_seminar');
            $table->string('link_dokumen_seminar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publikasis');
    }
};
