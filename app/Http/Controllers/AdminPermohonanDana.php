<?php

namespace App\Http\Controllers;

use App\Models\PermohonanDana;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPermohonanDana extends Controller
{
    public function indexOrmasPemohon()
    {
        $ormasPemohon = PermohonanDana::with('ormas')->latest()->get();
        return view('admin.permohonan-dana.ormas-pemohon.index', compact('ormasPemohon'));
    }

    public function detailOrmasPemohon($id)
    {
        $ormasPemohon = PermohonanDana::with('ormas')->findOrFail($id);
        // Mengirim data PermohonanDana ke tampilan
        return view('admin.permohonan-dana.ormas-pemohon.detail', compact('ormasPemohon'));
    }

    public function indexVerifikasi()
    {
        $verifikasi = PermohonanDana::with('ormas')->where('status', 'Menunggu Verifikasi')->latest()->get();
        return view('admin.permohonan-dana.verifikasi-berkas.index', compact('verifikasi'));
    }

    public function detailVerifikasi($id)
    {
        $verifikasi = PermohonanDana::with('ormas')->findOrFail($id);
        return view('admin.permohonan-dana.verifikasi-berkas.detail', compact('verifikasi'));
    }

    public function verifikasiTolak($id)
    {
        $verifikasi = PermohonanDana::findOrFail($id);

        // Update status menjadi "Ditolak"
        $verifikasi->status = 'Berkas Ditolak';
        $verifikasi->save();
        Alert::success('Sukses', 'Verifikasi Ditolak');
        return redirect('/permohonan-dana/verifikasi');
    }

    public function verifikasiTerima($id)
    {
        $verifikasi = PermohonanDana::findOrFail($id);

        // Update status menjadi "Diterima"
        $verifikasi->status = 'Berhasil Verifikasi';
        $verifikasi->save();
        Alert::success('Sukses', 'Berhasil Verifikasi');
        return redirect('/permohonan-dana/verifikasi');
    }

    public function indexMenunggu()
    {
        $menunggu = PermohonanDana::with('ormas')->where('status', 'Berhasil Verifikasi')->latest()->get();
        return view('admin.permohonan-dana.menunggu-sp2p.index', compact('menunggu'));
    }

    public function detailMenunggu($id)
    {
        $menunggu = PermohonanDana::with('ormas')->findOrFail($id);
        return view('admin.permohonan-dana.menunggu-sp2p.detail', compact('menunggu'));
    }

    public function destroy($id)
    {
        $ormasPemohon = PermohonanDana::find($id);

        $ormasPemohon->delete();
        Alert::success('Sukses', 'Berhasil Menghapus Permohonan Dana ');
        return redirect('/permohonan-dana/ormas-pemohon');
    }
}
