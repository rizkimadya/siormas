<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanDana extends Model
{
    use HasFactory;

    protected $fillable = [
        "status",
        "ormas_id",

        "periode",
        "jumlah_anggaran",
        "tujuan_permohonan",
        "surat_permohonan",
        "proposal",
        "fc_ktp_ketua",
        "fc_ktp_sekertaris",
    ];

    public function ormas()
    {
        return $this->belongsTo(User::class, 'ormas_id');
    }
}