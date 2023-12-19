<?php

namespace App\Http\Controllers;

use App\Models\SKT;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSKTController extends Controller
{
    public function indexOrmasTerdaftar()
    {
        $ormasTerdaftar = SKT::with('ormas')->latest()->get();
        return view('admin.permohonan-skt.ormas-terdaftar.index', compact('ormasTerdaftar'));
    }

    public function detailOrmasTerdaftar($id)
    {
        $ormasTerdaftar = SKT::with('ormas')->findOrFail($id);
        // Mengirim data SKT ke tampilan
        return view('admin.permohonan-skt.ormas-terdaftar.detail', compact('ormasTerdaftar'));
    }

    public function indexVerifikasi()
    {
        $verifikasi = SKT::with('ormas')->where('status', 'Menunggu Verifikasi')->latest()->get();
        return view('admin.permohonan-skt.verifikasi-ormas.index', compact('verifikasi'));
    }

    public function detailVerifikasi($id)
    {
        $verifikasi = SKT::with('ormas')->findOrFail($id);
        return view('admin.permohonan-skt.verifikasi-ormas.detail', compact('verifikasi'));
    }

    public function verifikasiTolak($id)
    {
        $verifikasi = SKT::findOrFail($id);

        // Update status menjadi "Ditolak"
        $verifikasi->status = 'Berkas Ditolak';
        $verifikasi->save();
        Alert::success('Sukses', 'Verifikasi Ditolak');
        return redirect('/permohonan-skt/verifikasi');
    }

    public function verifikasiTerima($id)
    {
        $verifikasi = SKT::findOrFail($id);

        // Update status menjadi "Diterima"
        $verifikasi->status = 'Berhasil Verifikasi';
        $verifikasi->save();
        Alert::success('Sukses', 'Berhasil Verifikasi');
        return redirect('/permohonan-skt/verifikasi');
    }

    public function indexMenunggu()
    {
        $menunggu = SKT::with('ormas')->where('status', 'Berhasil Verifikasi')->latest()->get();
        return view('admin.permohonan-skt.menunggu-skt.index', compact('menunggu'));
    }

    public function detailMenunggu($id)
    {
        $menunggu = SKT::with('ormas')->findOrFail($id);
        return view('admin.permohonan-skt.menunggu-skt.detail', compact('menunggu'));
    }

    public function destroy($id)
    {
        $ormasTerdaftar = SKT::find($id);

        $ormasTerdaftar->delete();
        Alert::success('Sukses', 'Berhasil Menghapus SKT ');
        return redirect('/permohonan-skt/ormas-terdaftar');
    }
}
