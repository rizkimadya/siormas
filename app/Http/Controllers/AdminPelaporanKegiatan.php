<?php

namespace App\Http\Controllers;

use App\Models\PelaporanKegiatan;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPelaporanKegiatan extends Controller
{
    public function indexOrmasPemohon()
    {
        $laporanOrmas = PelaporanKegiatan::with('ormas')->latest()->get();
        return view('admin.pelaporan-kegiatan.laporan-ormas.index', compact('laporanOrmas'));
    }

    public function detailOrmasPemohon($id)
    {
        $laporanOrmas = PelaporanKegiatan::with('ormas')->findOrFail($id);
        // Mengirim data PelaporanKegiatan ke tampilan
        return view('admin.pelaporan-kegiatan.laporan-ormas.detail', compact('laporanOrmas'));
    }

    public function indexVerifikasi()
    {
        $verifikasi = PelaporanKegiatan::with('ormas')->where('status', 'Menunggu Verifikasi')->latest()->get();
        return view('admin.pelaporan-kegiatan.verifikasi-berkas.index', compact('verifikasi'));
    }

    public function detailVerifikasi($id)
    {
        $verifikasi = PelaporanKegiatan::with('ormas')->findOrFail($id);
        return view('admin.pelaporan-kegiatan.verifikasi-berkas.detail', compact('verifikasi'));
    }

    public function verifikasiTolak($id)
    {
        $verifikasi = PelaporanKegiatan::findOrFail($id);

        // Update status menjadi "Ditolak"
        $verifikasi->status = 'Berkas Ditolak';
        $verifikasi->save();
        Alert::success('Sukses', 'Verifikasi Ditolak');
        return redirect('/pelaporan-kegiatan/verifikasi');
    }

    public function verifikasiTerima($id)
    {
        $verifikasi = PelaporanKegiatan::findOrFail($id);

        // Update status menjadi "Diterima"
        $verifikasi->status = 'Berhasil Verifikasi';
        $verifikasi->save();
        Alert::success('Sukses', 'Berhasil Verifikasi');
        return redirect('/pelaporan-kegiatan/verifikasi');
    }

    public function destroy($id)
    {
        $laporanOrmas = PelaporanKegiatan::find($id);

        $laporanOrmas->delete();
        Alert::success('Sukses', 'Berhasil Menghapus Pelaporan Kegiatan ');
        return redirect('/pelaporan-kegiatan/laporan-ormas');
    }
}
