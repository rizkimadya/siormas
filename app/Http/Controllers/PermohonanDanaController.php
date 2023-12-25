<?php

namespace App\Http\Controllers;

use App\Models\PermohonanDana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PermohonanDanaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $permohonanDana = PermohonanDana::where('ormas_id', $user->id)->latest()->get();
        return view('ormas.permohonan-dana.index', compact('permohonanDana'));
    }

    public function create()
    {
        return view('ormas.permohonan-dana.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ormas_id' => 'required',
            'jumlah_anggaran' => 'required',
            'tujuan_permohonan' => 'nullable',
            'no_rek' => 'required',
            'fc_burek'   => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'surat_permohonan'   => 'required|mimes:pdf|max:500000',
            'proposal'   => 'required|mimes:pdf|max:500000',
            'fc_ktp_ketua'   => 'required|mimes:pdf|max:500000',
            'fc_ktp_sekertaris'   => 'required|mimes:pdf|max:500000',
        ]);
        // fc burek
        $file = $request->file('fc_burek');
        $fc_burek = time() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/bukuRekening', $fc_burek);

        // surat permohonan
        $file1 = $request->file('surat_permohonan');
        $surat_permohonan = time() . "_" . $file1->getClientOriginalName();
        $file1->storeAs('public/suratPermohonan', $surat_permohonan);

        // proposal
        $file2 = $request->file('proposal');
        $proposal = time() . "_" . $file2->getClientOriginalName();
        $file2->storeAs('public/proposal', $proposal);

        // fc_ktp_ketua
        $file3 = $request->file('fc_ktp_ketua');
        $fc_ktp_ketua = time() . "_" . $file3->getClientOriginalName();
        $file3->storeAs('public/fc_ktp_ketua', $fc_ktp_ketua);

        // fc_ktp_sekertaris
        $file4 = $request->file('fc_ktp_sekertaris');
        $fc_ktp_sekertaris = time() . "_" . $file4->getClientOriginalName();
        $file4->storeAs('public/fc_ktp_sekertaris', $fc_ktp_sekertaris);

        $permohonanDana = new PermohonanDana([
            "status" => "Menunggu Verifikasi",
            "ormas_id" => $request->ormas_id,
            "periode" => date('Y'),
            "jumlah_anggaran" => $request->jumlah_anggaran,
            "tujuan_permohonan" => $request->tujuan_permohonan,
            "no_rek" => $request->no_rek,
            "fc_burek" => $fc_burek,
            "surat_permohonan" => $surat_permohonan,
            "proposal" => $proposal,
            "fc_ktp_ketua" => $fc_ktp_ketua,
            "fc_ktp_sekertaris" => $fc_ktp_sekertaris,
        ]);

        $permohonanDana->save();
        Alert::success('Sukses', 'Berhasil Mengajukan Permohonan Dana');
        return redirect('/permohonan-dana/index');
    }

    public function show($id)
    {
        $permohonanDana = PermohonanDana::find($id);

        // Pastikan permohonan dana ditemukan
        if (!$permohonanDana) {
            return redirect('/permohonan-dana/index');
        }

        // Periksa apakah pengguna yang masuk adalah pemilik permohonan dana
        if (Auth::user()->id != $permohonanDana->ormas_id) {
            return redirect('/permohonan-dana/index');
        }

        return view('ormas.permohonan-dana.detail', compact('permohonanDana'));
    }
}
