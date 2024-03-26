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
        Schema::create('seminar_proposals', function (Blueprint $table) {
            $table->increments("seminar_proposal_id");
            $table->string("nrp");
            $table->string("laporan_proposal");
            $table->string("penerima_naskah");
            $table->string("seminar_tesis");
            $table->string("lembar_monitoring");
            $table->string("ppt");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminar_proposals');
    }
};
