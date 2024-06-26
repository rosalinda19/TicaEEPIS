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
        Schema::create('revisis', function (Blueprint $table) {
            $table->increments("revisi_id");
            $table->string("nrp");
            $table->unsignedInteger("jenis_revisi_id");
            $table->foreign("jenis_revisi_id")->references("jenis_revisi_id")->on("jenis_revisis");
            $table->char("file_path");
            $table->text("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisis');
    }
};
