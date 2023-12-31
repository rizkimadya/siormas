<?php

namespace App\Http\Controllers;

use App\Models\SKT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SKTController extends Controller
{
    public function index()
    {
        return view('ormas.dashboard.index');
    }

    public function statusSkt()
    {
        $user = Auth::user();
        $latestStatusSkt = SKT::where('ormas_id', $user->id)->latest()->first();
        return view('ormas.dashboard.status', compact('latestStatusSkt'));
    }

    public function keorganisasian()
    {
        $user = Auth::user();
        $keorganisasian = SKT::where('ormas_id', $user->id)->latest()->first();
        return view('ormas.dashboard.keorganisasian', compact('keorganisasian'));
    }

    public function kepengurusan()
    {
        $user = Auth::user();
        $kepengurusan = SKT::where('ormas_id', $user->id)->latest()->first();
        return view('ormas.dashboard.kepengurusan', compact('kepengurusan'));
    }

    public function dokumen()
    {
        $user = Auth::user();
        $dokumen = SKT::where('ormas_id', $user->id)->latest()->first();
        return view('ormas.dashboard.dokumen', compact('dokumen'));
    }

    public function create()
    {
        return view('ormas.dashboard.permohonan-skt');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'ormas_id' => 'required',

                // data keorganisasian
                'bidang_kegiatan' => 'nullable',
                'no_telp' => 'required',
                'alamat_sekretariat' => 'required',
                'kelurahan' => 'required',
                'kecamatan' => 'required',
                'tempat_pendirian' => 'required',
                'tahun_pendirian' => 'required',
                'asas_organisasi' => 'nullable',
                'tujuan_organisasi' => 'nullable',

                // data kepergurusan
                'nama_pendiri' => 'required',
                'nama_pembina' => 'required',
                'nama_penasehat' => 'required',
                'nama_ketua' => 'required',
                'nama_sekertaris' => 'required',
                'nama_bendahara' => 'nullable',
                'masa_bhakti' => 'required',
                'keputusan_tertinggi' => 'required',
                'bentuk_organisasi' => 'required',
                'usaha_organisasi' => 'nullable',
                'sumber_keuangan' => 'nullable',

                // dokumen ormas
                'logo_organisasi' => 'required|image|mimes:jpeg,png,jpg|max:5000',
                'surat_pengantar'   => 'required|mimes:pdf|max:500000',
                'sk_kemenkum_ham'   => 'required|mimes:pdf|max:500000',
                'sk_pengurus'   => 'required|mimes:pdf|max:500000',
                'sk_domisili'   => 'required|mimes:pdf|max:500000',
                'surat_pernyataan'   => 'required|mimes:pdf|max:500000',
                'biodata_pengurus'   => 'required|mimes:pdf|max:500000',
                'akta_notaris'   => 'required|mimes:pdf|max:500000',
            ]);

            // logo
            $file1 = $request->file('logo_organisasi');
            $logo_organisasi = time() . "_" . $file1->getClientOriginalName();
            $file1->storeAs('public/logo_organisasi', $logo_organisasi);

            // surat_pengantar
            $file2 = $request->file('surat_pengantar');
            $surat_pengantar = time() . "_" . $file2->getClientOriginalName();
            $file2->storeAs('public/surat_pengantar', $surat_pengantar);

            // sk_kemenkum_ham
            $file3 = $request->file('sk_kemenkum_ham');
            $sk_kemenkum_ham = time() . "_" . $file3->getClientOriginalName();
            $file3->storeAs('public/sk_kemenkum_ham', $sk_kemenkum_ham);

            // sk_pengurus
            $file4 = $request->file('sk_pengurus');
            $sk_pengurus = time() . "_" . $file4->getClientOriginalName();
            $file4->storeAs('public/sk_pengurus', $sk_pengurus);

            // sk_domisili
            $file5 = $request->file('sk_domisili');
            $sk_domisili = time() . "_" . $file5->getClientOriginalName();
            $file5->storeAs('public/sk_domisili', $sk_domisili);

            // surat_pernyataan
            $file6 = $request->file('surat_pernyataan');
            $surat_pernyataan = time() . "_" . $file6->getClientOriginalName();
            $file6->storeAs('public/surat_pernyataan', $surat_pernyataan);

            // biodata_pengurus
            $file7 = $request->file('biodata_pengurus');
            $biodata_pengurus = time() . "_" . $file7->getClientOriginalName();
            $file7->storeAs('public/biodata_pengurus', $biodata_pengurus);

            // akta_notaris
            $file8 = $request->file('akta_notaris');
            $akta_notaris = time() . "_" . $file8->getClientOriginalName();
            $file8->storeAs('public/akta_notaris', $akta_notaris);


            $permohonanSkt = new SKT([
                "status" => "Menunggu Verifikasi",
                "ormas_id" => $request->ormas_id,

                // data keorganisasian
                "bidang_kegiatan" => $request->bidang_kegiatan,
                "no_telp" => $request->no_telp,
                'alamat_sekretariat' => $request->alamat_sekretariat,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'tempat_pendirian' => $request->tempat_pendirian,
                'tahun_pendirian' => $request->tahun_pendirian,
                'asas_organisasi' => $request->asas_organisasi,
                'tujuan_organisasi' => $request->tujuan_organisasi,

                // data keorganisasian
                "nama_pendiri" => $request->nama_pendiri,
                "nama_pembina" => $request->nama_pembina,
                "nama_penasehat" => $request->nama_penasehat,
                "nama_ketua" => $request->nama_ketua,
                "nama_sekertaris" => $request->nama_sekertaris,
                "nama_bendahara" => $request->nama_bendahara,
                "masa_bhakti" => $request->masa_bhakti,
                "keputusan_tertinggi" => $request->keputusan_tertinggi,
                "bentuk_organisasi" => $request->bentuk_organisasi,
                "usaha_organisasi" => $request->usaha_organisasi,
                "sumber_keuangan" => $request->sumber_keuangan,

                'logo_organisasi' => $logo_organisasi,
                'surat_pengantar'   => $surat_pengantar,
                'sk_kemenkum_ham'   => $sk_kemenkum_ham,
                'sk_pengurus'   => $sk_pengurus,
                'sk_domisili'   => $sk_domisili,
                'surat_pernyataan'   => $surat_pengantar,
                'biodata_pengurus' => $biodata_pengurus,
                'akta_notaris'   => $akta_notaris,
            ]);

            $permohonanSkt->save();
            Alert::success('Sukses', 'Berhasil Mengajukan Permohonan Skt');
            return redirect('/dashboard-ormas/status-skt');
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan jika ada
            Alert::error('Error', 'Gagal menyimpan data. ' . $e->getMessage());
            return redirect()->back();
        }
    }

    public function show($id)
    {
        $permohonanSkt = SKT::find($id);

        // Pastikan permohonan dana ditemukan
        if (!$permohonanSkt) {
            return redirect('/permohonan-skt/index');
        }

        // Periksa apakah pengguna yang masuk adalah pemilik permohonan dana
        if (Auth::user()->id != $permohonanSkt->ormas_id) {
            return redirect('/permohonan-skt/index');
        }

        return view('ormas.permohonan-skt.detail', compact('permohonanSkt'));
    }
}
