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
        Schema::create('permohonan_danas', function (Blueprint $table) {
            $table->id();
            $table->string("status");
            $table->unsignedBigInteger("ormas_id");

            // file
            $table->string("file_sp2p")->nullable();
            $table->string("keterangan")->nullable();

            $table->string("periode");
            $table->string("jumlah_anggaran");
            $table->text("tujuan_permohonan")->nullable();
            $table->string("no_rek");
            $table->string("fc_burek");
            $table->string("surat_permohonan");
            $table->string("proposal");
            $table->string("fc_ktp_ketua");
            $table->string("fc_ktp_sekertaris");
            $table->timestamps();

            $table->foreign('ormas_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan_danas');
    }
};
