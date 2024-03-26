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
            $table->increments("pengajuan_judul_id");
            $table->string("nama");
            $table->string("nrp");
            $table->unsignedInteger("program_studi_id");
            $table->foreign("program_studi_id")->references("program_studi_id")->on("program_studis");
            $table->string("tahun_angkatan");
            $table->string("tahun_ajaran");
            $table->string("semester");
            $table->date("tanggal_upload");
            $table->text("judul_tesis");
            $table->string("dosen_pembimbing1");
            $table->string("dosen_pembimbing2");
            $table->string("dosen_pembimbing3");
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
