<?php

namespace App\Http\Controllers;

use App\Models\PermohonanDana;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPermohonanDana extends Controller
{
    public function sp2p(Request $request, $id)
    {
        $sp2p = PermohonanDana::findOrFail($id);

        // Validasi request
        $request->validate([
            'file_sp2p' => 'required|mimes:pdf|max:50000', // Sesuaikan dengan aturan validasi file Anda
            'keterangan' => 'nullable|string', // Sesuaikan dengan aturan validasi keterangan Anda
        ]);

        // Simpan file SP2P
        $fileSp2p = $request->file('file_sp2p');
        $fileName = time() . '_' . $fileSp2p->getClientOriginalName();
        $fileSp2p->storeAs('public/sp2p', $fileName);

        // Update data SP2P
        $sp2p->file_sp2p = $fileName;
        $sp2p->keterangan = $request->keterangan;
        $sp2p->status = 'Berhasil Kirim SP2P';
        $sp2p->save();

        Alert::success('Sukses', 'Surat Tanda Terima Dana Berhasil Dikirim');
        return redirect('/permohonan-dana/menunggu');
    }


    public function indexOrmasPemohon()
    {
        $ormasPemohon = PermohonanDana::with('ormas')->where('status', 'Berhasil Kirim SP2P')->orWhere('status', 'Berhasil Verifikasi')->latest()->get();
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

    public function verifikasiTolak(Request $request, $id)
    {
        $verifikasi = PermohonanDana::findOrFail($id);

        // Update status menjadi "Ditolak"
        $verifikasi->status = 'Berkas Ditolak';
        $verifikasi->keterangan = $request->keterangan;
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
        $menunggu = PermohonanDana::with('ormas')
            ->where('status', 'Berhasil Verifikasi')
            ->whereNull('file_sp2p') // Add this condition
            ->latest()
            ->get();

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
