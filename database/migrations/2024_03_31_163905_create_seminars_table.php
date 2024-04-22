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
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('judul_id')->constrained('juduls');
            $table->foreignid('kategori_id')->constrained('kategoris');
            $table->string('laporan');
            $table->string('penerima_naskah');
            $table->string('seminar_tesis');
            $table->string('lembar_monitoring');
            $table->string('ppt');
            $table->string('video_demo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminars');
    }
};
