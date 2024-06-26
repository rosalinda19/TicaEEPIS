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
        Schema::create('upload_publikasis', function (Blueprint $table) {
            $table->increments("upload_publikasi_id");
            $table->string("nrp");
            $table->string("seminar_tesis");
            $table->date("tanggal");
            $table->string("ppt");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_publikasis');
    }
};
