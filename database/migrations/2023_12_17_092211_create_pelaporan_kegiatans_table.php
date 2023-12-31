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
        Schema::create('pelaporan_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string("status");
            $table->unsignedBigInteger("ormas_id");

            $table->string("keterangan")->nullable();

            $table->string("jenis_kegiatan");
            $table->string("waktu_pelaksanaan");
            $table->text("lokasi_pelaksanaan");
            $table->string("kelurahan");
            $table->string("kecamatan");
            $table->string("ketupat");
            $table->string("jumlah_anggaran");
            $table->string("tujuan_permohonan")->nullable();
            $table->string("laporan_kegiatan");
            $table->string("foto_kegiatan1");
            $table->string("foto_kegiatan2");
            $table->string("foto_kegiatan3")->nullable();
            $table->timestamps();

            $table->foreign('ormas_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaporan_kegiatans');
    }
};
