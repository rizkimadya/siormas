<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelaporanKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        "status",
        "ormas_id",

        'skt',
        'keterangan',

        "jenis_kegiatan",
        "waktu_pelaksanaan",
        "lokasi_pelaksanaan",
        "kelurahan",
        "kecamatan",
        "ketupat",
        "jumlah_anggaran",
        "tujuan_permohonan",
        "laporan_kegiatan",
        "foto_kegiatan1",
        "foto_kegiatan2",
        "foto_kegiatan3",
    ];

    public function ormas()
    {
        return $this->belongsTo(User::class, 'ormas_id');
    }
}
