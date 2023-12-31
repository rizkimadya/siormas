<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKT extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',

        // keorganisasian
        'ormas_id',
        'bidang_kegiatan',
        'no_telp',
        'alamat_sekretariat',
        'kelurahan',
        'kecamatan',
        'tempat_pendirian',
        'tahun_pendirian',
        'asas_organisasi',
        'tujuan_organisasi',

        // data kepengurusan
        'nama_pendiri',
        'nama_pembina',
        'nama_penasehat',
        'nama_ketua',
        'nama_sekertaris',
        'nama_bendahara',
        'masa_bhakti',
        'keputusan_tertinggi',
        'bentuk_organisasi',
        'usaha_organisasi',
        'sumber_keuangan',

        // dokumen ormas
        'logo_organisasi',
        'surat_pengantar',
        'sk_kemenkum_ham',
        'sk_pengurus',
        'sk_domisili',
        'surat_pernyataan',
        'biodata_pengurus',
        'akta_notaris',

    ];

    public function ormas()
    {
        return $this->belongsTo(User::class, 'ormas_id');
    }
}
