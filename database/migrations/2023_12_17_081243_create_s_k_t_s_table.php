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
        Schema::create('s_k_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('status');

            // file
            $table->string('skt')->nullable();
            $table->string('keterangan')->nullable();

            // data keorganisasian
            $table->unsignedBigInteger('ormas_id');
            $table->string('bidang_kegiatan')->nullable();
            $table->string('no_telp');
            $table->text('alamat_sekretariat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('tempat_pendirian');
            $table->string('tahun_pendirian');
            $table->text('asas_organisasi')->nullable();
            $table->text('tujuan_organisasi')->nullable();

            // data kepengurusan
            $table->string('nama_pendiri');
            $table->string('nama_pembina');
            $table->string('nama_penasehat');
            $table->string('nama_ketua');
            $table->string('nama_sekertaris');
            $table->string('nama_bendahara')->nullable();
            $table->string('masa_bhakti');
            $table->string('keputusan_tertinggi');
            $table->string('bentuk_organisasi');
            $table->string('usaha_organisasi')->nullable();
            $table->string('sumber_keuangan')->nullable();

            // dokumen ormas
            $table->string('logo_organisasi');
            $table->string('surat_pengantar');
            $table->string('sk_kemenkum_ham');
            $table->string('sk_pengurus');
            $table->string('sk_domisili');
            $table->string('surat_pernyataan');
            $table->string('biodata_pengurus');
            $table->string('akta_notaris');

            $table->timestamps();

            $table->foreign('ormas_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_k_t_s');
    }
};
