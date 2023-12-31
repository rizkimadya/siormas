<?php

namespace App\Http\Controllers;

use App\Models\SKT;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSKTController extends Controller
{
    public function skt(Request $request, $id)
    {
        $skt = SKT::findOrFail($id);

        // Validasi request
        $request->validate([
            'skt' => 'required|mimes:pdf|max:50000', // Sesuaikan dengan aturan validasi file Anda
            'keterangan' => 'nullable|string', // Sesuaikan dengan aturan validasi keterangan Anda
        ]);

        // Simpan file SP2P
        $fileSkt = $request->file('skt');
        $fileName = time() . '_' . $fileSkt->getClientOriginalName();
        $fileSkt->storeAs('public/skt', $fileName);

        // Update data SP2P
        $skt->skt = $fileName;
        $skt->keterangan = $request->keterangan;
        $skt->status = 'Berhasil Kirim SKT';
        $skt->save();

        Alert::success('Sukses', 'Dokumen SKT Berhasil Dikirim');
        return redirect('/permohonan-skt/menunggu');
    }

    public function indexOrmasTerdaftar()
    {
        $ormasTerdaftar = SKT::with('ormas')->where('status', 'Berhasil Kirim SKT')->orWhere('status', 'Berhasil Verifikasi')->latest()->get();
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

    public function verifikasiTolak(Request $request, $id)
    {
        $verifikasi = SKT::findOrFail($id);

        // Update status menjadi "Ditolak"
        $verifikasi->status = 'Berkas Ditolak';
        $verifikasi->keterangan = $request->keterangan;
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
        $menunggu = SKT::with('ormas')
            ->where('status', 'Berhasil Verifikasi')
            ->whereNull('skt')
            ->latest()
            ->get();
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
