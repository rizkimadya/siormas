@extends('admin.permohonan-skt.index')
@section('detail')
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-body d-flex border-0">
            <a href="{{ secure_url('permohonan-skt/verifikasi') }}" class="card-icon pr-4 py-0">
                <i class="flaticon2-left-arrow-1 text-dark"></i>
            </a>
            <h6 class="font-weight-bolder m-0 py-1">
                Detail Verifikasi
            </h6>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-0">
            <div style="border-left: 3px solid #008E42;" class="card-title py-2 m-0 px-4">
                <h5 class="font-weight-bolder text-primary m-0">Informasi Keorganisasian</h5>
            </div>
            <div class="pt-8">
                <tr>
                    <td class="text-right">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column flex-root pr-8">
                                <h7 class="opacity-70 mb-3">Bidang Kegiatan</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->bidang_kegiatan }}</h6>
                            </div>
                            <div class="d-flex flex-column flex-root pr-8">
                                <h7 class="opacity-70 mb-3">Nomor Telepon Ketua</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->no_telp }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root pr-8">
                                <h7 class="opacity-70 mb-3">Alamat Sekretariat/Kantor</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->alamat_sekretariat }}</h6>
                            </div>
                            <div class="d-flex flex-column flex-root pr-8">
                                <h7 class="opacity-70 mb-3">Kelurahan</h7>
                                <h6 class="font-weight-bolder" id="kelurahanName">{{ $verifikasi->kelurahan }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root pr-8">
                                <h7 class="opacity-70 mb-3">Kecamatan</h7>
                                <h6 class="font-weight-bolder" id="kecamatanName"> {{ $verifikasi->kecamatan }}</h6>
                            </div>
                            <div class="d-flex flex-column flex-root pr-8">
                                <h7 class="opacity-70 mb-3">Tempat Pendirian</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->tempat_pendirian }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root pr-8">
                                <h7 class="opacity-70 mb-3">Tahun Pendirian</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->tahun_pendirian }}</h6>
                            </div>
                            <div class="d-flex flex-column flex-root pr-8">
                                <h7 class="opacity-70 mb-3">No. SK Pengurus</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->ormas->no_sk_pengurus }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root pr-8">
                                <h7 class="opacity-70 mb-3">Asas Ciri Organisasi</h7>
                                <h6 class="font-weight-bolder">
                                    {{ $verifikasi->asas_organisasi }}
                                </h6>
                            </div>
                            <div class="d-flex flex-column flex-root pr-8">
                                <h7 class="opacity-70 mb-3">Tujuan Organisasi</h7>
                                <h6 class="font-weight-bolder">
                                    {{ $verifikasi->tujuan_organisasi }}
                                </h6>
                            </div>
                        </div>
                    </td>
                </tr>
            </div>
        </div>
        <div class="card-body pt-0">
            <div style="border-left: 3px solid #008E42;" class="card-title py-2 m-0 px-4">
                <h5 class="font-weight-bolder text-primary m-0">Informasi Kepengurusan</h5>
            </div>
            <div class="pt-8">
                <tr>
                    <td class="p-0 py-4">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Nama Pendiri</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->nama_pendiri }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Nama Pembina</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->nama_pembina }}</h6>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Nama Penasehat</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->nama_penasehat }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Nama Ketua</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->nama_ketua }}</h6>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Nama Sekertaris</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->nama_sekertaris }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Nama Bendahara</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->nama_bendahara }}</h6>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Masa Bhakti Kepengurusan</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->masa_bhakti }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Keputusan Tertinggi Organisasi</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->keputusan_tertinggi }}</h6>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Tingkatan Organisasi</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->bentuk_organisasi }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Usaha Organisasi</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->usaha_organisasi }}</h6>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <h7 class="opacity-70 mb-3">Sumber Keuangan</h7>
                                <h6 class="font-weight-bolder">{{ $verifikasi->sumber_keuangan }}</h6>
                            </div>
                        </div>
                    </td>
                </tr>
            </div>
        </div>
        <div class="card-body pt-0">
            <div style="border-left: 3px solid #008E42;" class="card-title py-2 m-0 px-4">
                <h5 class="font-weight-bolder text-primary m-0">Dokumen Organisasi</h5>
            </div>
            <div class="pt-8">
                <!--begin::Form-->
                <div class="row m-0">
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Logo
                                Organisasi</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href='{{ secure_asset('storage/logo_organisasi/' . $verifikasi->logo_organisasi) }}'
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Surat
                                Pengantar</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href='{{ secure_asset('storage/surat_pengantar/' . $verifikasi->surat_pengantar) }}'
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                </div>
                <div class="row mt-6 m-0">
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">SK Kementrian Hukum
                                dan Ham</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href='{{ secure_asset('storage/sk_kemenkum_ham/' . $verifikasi->sk_kemenkum_ham) }}'
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">SK Pengurus</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href='{{ secure_asset('storage/sk_pengurus/' . $verifikasi->sk_pengurus) }}'
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                </div>
                <div class="row mt-6 m-0">
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Surat Keterangan
                                Domisili</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href='{{ secure_asset('storage/sk_domisili/' . $verifikasi->sk_domisili) }}'
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Surat
                                Pernyataan</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank"
                            href='{{ secure_asset('storage/surat_pernyataan/' . $verifikasi->surat_pernyataan) }}'
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                </div>
                <div class="row mt-6 m-0">
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded mr-7">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Biodata Pengurus</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href='{{ secure_asset('storage/biodata_pengurus/' . $verifikasi->biodata_pengurus) }}'
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                    <div class="d-flex align-items-center border col bg-white px-6 py-4 rounded">
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 font-size-lg mb-1">Akta Notaris dan
                                NPWP</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Buttonpreview-->
                        <a target="_blank" href='{{ secure_asset('storage/akta_notaris/' . $verifikasi->akta_notaris) }}'
                            class="btn btn-outline-primary font-weight-bold px-4 py-2">Preview</a>
                        <!--end::Buttonpreview-->
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer justify-content-end d-flex" style="gap:10px;">

            <!-- Button trigger modal-->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                Tolak
            </button>

            <!-- Modal-->
            <div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="staticBackdrop" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Verifikasi Tolak</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/permohonan-skt/verifikasi/tolak/{{ $verifikasi->id }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleTextarea">Keterangan</label>
                                    <textarea class="form-control" name="keterangan" rows="3"></textarea>
                                </div>
                                <div class="pb-5 justify-content-end d-flex" style="gap:10px;">
                                    <button type="button" class="btn btn-light font-weight-bold"
                                        data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary px-6 ">KIRIM</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <a href="/permohonan-skt/verifikasi/terima/{{ $verifikasi->id }}" class="btn btn-primary px-8"
                onclick="return confirm('Anda yakin ingin memverifikasi permohonan ini?')">VERIFIKASI</a>

        </div>
    </div>
@endsection
